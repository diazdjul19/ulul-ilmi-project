<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\MsCtCreator;
use Illuminate\Support\Facades\Hash;


use Illuminate\Http\Request;

class CtContentController extends Controller
{
    // Start For Controller Creator
    public function ct_creator()
    {
        $data = MsCtCreator::all();
        return view('view_dashboard.ct_content.ct-creator', compact('data'));
    }

    public function ct_creator_store(Request $request)
    {
        $this->validate($request, [
            'name_creator' => ['required'],
            'login_email' => ['required'],
            'password' => ['required'],
        ]);

        if ($request->password != $request->password_confirmation) {
            alert()->error('Error',"Password dan Confirm Password tidak sama");
            return back()->withInput();
        }

        try {

            \DB::beginTransaction();

            $data = new MsCtCreator;
            $data->name_creator = $request->name_creator;

            // Cek Apakah ada email yang sama
            $cekEmail = MsCtCreator::where('login_email', $request->login_email)->first();
            if ($cekEmail == null) {
                $data->login_email = $request->login_email;
            }elseif ($cekEmail == true) {
                alert()->error('Error',"Email yang anda input sudah terdaftar");
                return back()->withInput();
            }

            $data->login_password = Hash::make($request->password);
            $data->status = "pending";
            $data->social_link_facebook = $request->social_link_facebook;
            $data->social_link_instagram = $request->social_link_instagram;
            $data->social_link_youtube = $request->social_link_youtube;
            
            if (isset($request->foto_creator)) {
                $imageFile = $request->name_creator . '/' . \Str::random(60) . '.' . $request->foto_creator->getClientOriginalExtension();
                $image_path = $request->file('foto_creator')->move(storage_path('app/public/creator/' . $request->name_creator), $imageFile);

                $data->foto_creator = $imageFile;
            }
            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Creator baru Berhasil di tambah");
            return back()->withInput();
            

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return back()->withInput();

        }
    }

    public function ct_creator_edit($id)
    {
        $data = MsCtCreator::find($id);
        return view('view_dashboard.ct_content.ct-creator-edit', compact('data'));
    }

    public function ct_creator_update(Request $request, $id)
    {

        try {

            \DB::beginTransaction();
            $data = MsCtCreator::find($id);
            $data->name_creator = $request->get('name_creator');
            $data->social_link_facebook = $request->get('social_link_facebook');
            $data->social_link_instagram = $request->get('social_link_instagram');
            $data->social_link_youtube = $request->get('social_link_youtube');

            if (isset($request->foto_creator)) {
                    $imageFile = $request->name_creator . '/' . \Str::random(60) . '.' . $request->foto_creator->getClientOriginalExtension();
                    $image_path = $request->file('foto_creator')->move(storage_path('app/public/creator/' . $request->name_creator), $imageFile);

                    $data->foto_creator = $imageFile;
                }
            
            // Cek Apakah ada email yang sama
            $cekEmail = MsCtCreator::where('login_email', $request->get('login_email'))->first();
            if (isset($request->login_email)) {
                if ($cekEmail == null) {
                    $data->login_email = $request->get('login_email');
                }elseif ($data->id == $cekEmail->id) {
                    $data->login_email = $request->get('login_email');
                }elseif ($data->id != $cekEmail->id) {
                    alert()->error('Error',"Email yang anda input sudah terdaftar");
                    return redirect(route('ct-creator-edit', [$data->id]));
                }
            }

            // Check Confirm Password
            if ($request->password != $request->password_confirmation) {
                alert()->error('Error',"Password Baru dan Password Confirmation tidak sama");
                return redirect(route('ct-creator-edit', [$data->id]));
            }
            // Check Old Password
            if (isset($request->password)) {
                if (\Hash::check($request->old_password, $data->login_password)) {

                    // Make Hash Password
                    if (isset($request->password)) {
                        $data->login_password = \Hash::make($request->password);
                    }

                }else {
                    alert()->error('Error',"Password lama tidak sesuai");
                    return redirect(route('ct-creator-edit', [$data->id]));
                }
            }

            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Creator Berhasil di Edit");
            return redirect(route('ct-creator'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-creator'));
            
        }

    }

    public function ct_creator_delete($id)
    {
        $data_redirect = MsCtCreator::find($id);
        $data = MsCtCreator::find($id)->delete();

        return redirect(route('ct-creator'));
    }

    public function ct_creator_active($id)
    {
        
        $data = MsCtCreator::find($id);
        $data->update(['status' => 'active']);

        return redirect(route('ct-creator'));
    }

    public function ct_creator_not_active($id)
    {
        $data = MsCtCreator::find($id);
        $data->update(['status' => 'not_active']);

        return redirect(route('ct-creator'));
    }
    // END For Controller Creator










    // Start For Controller Content
    public function ct_content()
    {
        return view('view_dashboard.ct_content.ct-content');
    }

    // End For Controller Content
    

}
