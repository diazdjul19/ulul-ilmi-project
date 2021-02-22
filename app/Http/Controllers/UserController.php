<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\User;
use Auth;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //  Membuat Hak Akses : Jika level = "A" maka bisa masuk ke index, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            $data = User::all();
            return view('view_dashboard.user', compact('data'));

        }elseif(Auth::user()->level == "O") {
            abort(404);
        }else {
            abort(404);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Membuat Validasi Dulu
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        try {

            \DB::beginTransaction();

            // Membuat Data User
            $data = new User();
            $data->name = $request->name;
            $data->email = $request->email;
            $data->password = Hash::make($request->password);
            $data->tmp_lahir = $request->tmp_lahir;
            $data->tgl_lahir = $request->tgl_lahir;
            $data->gender = $request->gender;
            $data->no_hp = $request->no_hp;
            $data->level = $request->level;
            $data->foto_user = $request->foto_user;
            $data->status = "not_active";

            if (isset($request->foto_user)) {
                $imageFile = $request->name . '/' . \Str::random(60) . '.' . $request->foto_user->getClientOriginalExtension();
                $image_path = $request->file('foto_user')->move(storage_path('app/public/user/' . $request->name), $imageFile);

                $data->foto_user = $imageFile;
            }
            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            $naus = $data->name;
            alert()->success('Selamat',"User '$naus' Berhasil Di Tambahkan");
            return redirect(route('user.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('user.index'));
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //  Membuat Hak Akses : Jika level = "A" maka bisa masuk ke Delete, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            $data = User::find($id);
            return view('view_dashboard.user-detail', compact('data'));

        }elseif(Auth::user()->level == "O") {
            
            if (Auth::user()->id == $id) {
                $data = User::find($id);
                return view('view_dashboard.user-detail', compact('data'));
            }elseif (Auth::user()->id != $id) {
                abort(404);
            }

        }else {
            abort(404);
        }
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        if (Auth::user()->level == "A") {

            $data = User::find($id);
            return view('view_dashboard.user-edit', compact('data'));

        }elseif (Auth::user()->level == "O") {

            if (Auth::user()->id == $id) {
                $data = User::find($id);
                return view('view_dashboard.user-edit', compact('data'));
            }elseif (Auth::user()->id != $id) {
                abort(404);
            }

        }else {
            abort(404);
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Membuat Validasi Dulu
        // $this->validate($request, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        // ]);

        try {
            
            \DB::beginTransaction();

            $data = User::find($id);
            $data->name = $request->get('name');
            $data->email = $request->get('email');
            $data->tmp_lahir = $request->get('tmp_lahir');
            $data->tgl_lahir = $request->get('tgl_lahir');
            $data->gender = $request->get('gender');
            $data->no_hp = $request->get('no_hp');

            if (isset($request->level)) {
                $data->level = $request->get('level');
            }

            if (isset($request->foto_user)) {
                $imageFile = $request->name . '/' . \Str::random(60) . '.' . $request->foto_user->getClientOriginalExtension();
                $image_path = $request->file('foto_user')->move(storage_path('app/public/user/' . $request->name), $imageFile);

                $data->foto_user = $imageFile;
            }
            
            
            $data->save();
            \DB::commit();

            \Session::flash('success_edit_profil', "Selamat, Anda telah berhasil mengedit data user dengan nama '$data->name' ");
            return redirect(route('user.edit', [$data->id]));
            
        } catch (\Exception $e) {
            // \DB::rollback() yang akan mengembalikan data atau dihapus jika ada salah satu proses diatas ada yg
            // error ataupun salah. Biasakan pakai Ini juga 
            \DB::rollback();
            \Session::flash('error_edit_profil', $e->getMessage());
            return redirect(route('user.edit', [$data->id]));

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //  Membuat Hak Akses : Jika level = "A" maka bisa masuk ke Delete, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            // Code

        }elseif(Auth::user()->level == "O") {
            abort(404);
        }else {
            abort(404);
        }

    }



    public function edit_password_store_ao(Request $request)
    {
        $data_session = Auth::user();

        $data = User::where('email', $data_session->email)->first();

        // Check Old Password
        if (\Hash::check($request->old_password, $data->password)) {


            // Check Confirm Password
            if ($request->password != $request->password_confirmation) {
                \Session::flash('pass_copass_tidak_sama', 'Password Dan Confirm Password Tidak Sama !');
                return redirect(route('user.edit', [$data->id]));
            }
            elseif ($request->password == false) {
                \Session::flash('non_new_pass', 'Password Baru Belum Di Isi !');
                return redirect(route('user.edit', [$data->id]));
            }

            // Make Hash Password
            if (isset($request->password)) {
                $data->password = \Hash::make($request->password);

                // Update Password Siswa
                $data_akhir = $data->password;
                $data->update(['password' => $data_akhir]);


                \Session::flash('success_edit_password', 'Sukses Update Password');
                return redirect(route('user.edit', [$data->id]));
            }

        }else {
            \Session::flash('error_old_password', 'Password Lama Tidak Sesuai !');
            return redirect(route('user.edit', [$data->id]));
        }
    }

    public function select_delete_user(Request $request)
    {

        //  Membuat Hak Akses : Jika level = "A" maka bisa masuk ke Delete, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            $select_delete = $request->get('select_delete');

            if ($select_delete == true) {

                $data_confirm = User::whereIn('id', $select_delete)->get('id');

                if ($data_confirm == true) {
                    $delete_now = User::whereIn('id', $data_confirm)->delete();
                } else {
                    return "Gagal Menghapus Data :(";
                }

                toast('Data Berhasil Di Hapus', 'info');
                return redirect(route('user.index'));
            } else {
                return redirect(route('user.index'));
            }

        }elseif(Auth::user()->level == "O") {
            abort(404);
        }else {
            abort(404);
        }

    }

    public function user_active($id)
    {
        //  Membuat Hak Akses : Jika level = "A" maka bisa masuk, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            $data = User::find($id);
            $data->update(['status' => 'active']);
            return redirect(route('user.index'));

        }elseif(Auth::user()->level == "O") {
            abort(404);
        }else {
            abort(404);
        }
        
    }

    public function user_not_active($id)
    {
        //  Membuat Hak Akses : Jika level = "A" maka bisa masuk, Jika level = "O" maka gak bisa masuk
        if (Auth::user()->level == "A") {

            $data = User::find($id);
            $data->update(['status' => 'not_active']);
            return redirect(route('user.index'));

        }elseif(Auth::user()->level == "O") {
            abort(404);
        }else {
            abort(404);
        }
        
        
    }
}
