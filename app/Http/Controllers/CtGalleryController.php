<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsCtGallery;

class CtGalleryController extends Controller
{
    
    public function ct_gallery_sdit()
    {
        $data = MsCtGallery::where('category_image', 'sdit_image')->get();
        return view('view_dashboard.ct_gallery.ct-gallery-sdit', compact('data'));
    }

    public function ct_gallery_mts()
    {
        $data = MsCtGallery::where('category_image', 'mts_image')->get();
        return view('view_dashboard.ct_gallery.ct-gallery-mts', compact('data'));
    }

    public function ct_gallery_ma()
    {
        $data = MsCtGallery::where('category_image', 'ma_image')->get();
        return view('view_dashboard.ct_gallery.ct-gallery-ma', compact('data'));
    }

    public function ct_gallery_mdt()
    {
        $data = MsCtGallery::where('category_image', 'mdt_image')->get();
        return view('view_dashboard.ct_gallery.ct-gallery-mdt', compact('data'));
    }

    public function ct_gallery_other()
    {
        $data = MsCtGallery::where('category_image', 'other_image')->get();
        return view('view_dashboard.ct_gallery.ct-gallery-other', compact('data'));
    }

    private function random_custom ($length = 10)
    {
        $char = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $char_length = strlen($char);
        $random_string = '';
        for($i=0; $i < $length; $i++){
            $random_string .= $char[rand(0,$char_length-1)];
        }
        return $random_string;
    }

    public function ct_gallery_store(Request $request)
    {
        try {

            \DB::beginTransaction();

            $data = new MsCtGallery;
            $data->name_image = $request->name_image;
            $data->category_image = $request->category_image;
            if (isset($request->image)) {
                $imageFile = $request->name_image . '/' . \Str::random(10) . '.' . $request->image->getClientOriginalExtension();
                $image_path = $request->file('image')->move(storage_path('app/public/image/' . $request->name_image), $imageFile);

                $data->image = $imageFile;
            }

            // Mengecek jika ada randome image yang sama
            $check_image = MsCtGallery::where('image', $data->image)->first();
            if ($check_image == true) {
                // Jika Rendome yang di atas sudah ada maka buat randome baru
                $imageFile = $request->name_image . '/' . $this->random_custom(10) . '.' . $request->image->getClientOriginalExtension();
                $image_path = $request->file('image')->move(storage_path('app/public/image/' . $request->name_image), $imageFile);
                $data->image = $imageFile;
            }

            $data->save();
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Image '$request->name_image' berhasil di buat");
            if ($request->category_image == "sdit_image") {
                return redirect(route('ct-gallery-sdit'));
            }elseif ($request->category_image == "mts_image") {
                return redirect(route('ct-gallery-mts'));
            }elseif ($request->category_image == "ma_image") {
                return redirect(route('ct-gallery-ma'));
            }elseif ($request->category_image == "mdt_image") {
                return redirect(route('ct-gallery-mdt'));
            }elseif ($request->category_image == "other_image") {
                return redirect(route('ct-gallery-other'));
            }

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            if ($request->category_image == "sdit_image") {
                return redirect(route('ct-gallery-sdit-create-custom'));
            }elseif ($request->category_image == "mts_image") {
                return redirect(route('ct-gallery-mts-create-custom'));
            }elseif ($request->category_image == "ma_image") {
                return redirect(route('ct-gallery-ma-create-custom'));
            }elseif ($request->category_image == "mdt_image") {
                return redirect(route('ct-gallery-mdt-create-custom'));
            }elseif ($request->category_image == "other_image") {
                return redirect(route('ct-gallery-other'));
            }
        }
    }

    public function ct_gallery_update(Request $request, $id)
    {
        try {

            \DB::beginTransaction();

            $data = MsCtGallery::find($id);
            $data->name_image = $request->get('name_image');
            $data->category_image = $request->get('category_image');
            
            if (isset($request->image)) {
                $imageFile = $request->name_image . '/' . \Str::random(10) . '.' . $request->image->getClientOriginalExtension();
                $image_path = $request->file('image')->move(storage_path('app/public/image/' . $request->name_image), $imageFile);

                $data->image = $imageFile;
            }

            $data->save();
            
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Image '$request->name_image' berhasil di Update");
            if ($request->category_image == "sdit_image") {
                return redirect(route('ct-gallery-sdit'));
            }elseif ($request->category_image == "mts_image") {
                return redirect(route('ct-gallery-mts'));
            }elseif ($request->category_image == "ma_image") {
                return redirect(route('ct-gallery-ma'));
            }elseif ($request->category_image == "mdt_image") {
                return redirect(route('ct-gallery-mdt'));
            }elseif ($request->category_image == "other_image") {
                return redirect(route('ct-gallery-other'));
            }

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            if ($request->category_image == "sdit_image") {
                return redirect(route('ct-gallery-sdit'));
            }elseif ($request->category_image == "mts_image") {
                return redirect(route('ct-gallery-mts'));
            }elseif ($request->category_image == "ma_image") {
                return redirect(route('ct-gallery-ma'));
            }elseif ($request->category_image == "mdt_image") {
                return redirect(route('ct-gallery-mdt'));
            }elseif ($request->category_image == "other_image") {
                return redirect(route('ct-gallery-other'));
            }
        }
    }

    public function ct_gallery_delete($id)
    {
        $data_redirect = MsCtGallery::find($id);
        $data = MsCtGallery::find($id)->delete();

        if ($data_redirect->category_image == "sdit_image") {
            return redirect(route('ct-gallery-sdit'));
        }elseif ($data_redirect->category_image == "mts_image") {
            return redirect(route('ct-gallery-mts'));
        }elseif ($data_redirect->category_image == "ma_image") {
            return redirect(route('ct-gallery-ma'));
        }elseif ($data_redirect->category_image == "mdt_image") {
            return redirect(route('ct-gallery-mdt'));
        }elseif ($data_redirect->category_image == "other_image") {
            return redirect(route('ct-gallery-other'));
        }
    }











    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index()
    // {
    //     //
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
