<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\MsCtHome;

class CtHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_default = MsCtHome::where('ct_home_category', 'ct_default')->get();
        $data_custom = MsCtHome::where('ct_home_category', 'ct_custom')->get();
        
        $MD5_text_on_bgimg = "13299d20250b1fbd9f7077363b7cf053";
        $MD5_text_sambutan = "e2b42d12d3dae75f352f37cb73e466f0";
        $MD5_text_content_berita = "0c98894eb5a8c4eec794cece29615995";

        $MD5_text_on_bgimg_cekcode = MsCtHome::where('ct_home_uc', $MD5_text_on_bgimg)->first();
        $MD5_text_sambutan_cekcode = MsCtHome::where('ct_home_uc', $MD5_text_sambutan)->first();
        $MD5_text_content_berita_cekcode = MsCtHome::where('ct_home_uc', $MD5_text_content_berita)->first();
        
        return view('view_dashboard.ct_home.ct-home', compact('data_default', 'data_custom',  'MD5_text_on_bgimg', 'MD5_text_sambutan', 'MD5_text_content_berita', 'MD5_for_route',  'MD5_text_on_bgimg_cekcode', 'MD5_text_sambutan_cekcode', 'MD5_text_content_berita_cekcode'));
    }

    public function ct_home_create_md5tob($MD5_text_on_bgimg)
    {
        $cek_code = $MD5_text_on_bgimg;
        return view('view_dashboard.ct_home.ct-home-create-default', compact('cek_code'));

    }

    public function ct_home_create_md5ts($MD5_text_sambutan)
    {
        $cek_code = $MD5_text_sambutan;
        return view('view_dashboard.ct_home.ct-home-create-default', compact('cek_code'));

    }

    public function ct_home_create_md5tcb($MD5_text_content_berita)
    {
        $cek_code = $MD5_text_content_berita;
        return view('view_dashboard.ct_home.ct-home-create-default', compact('cek_code'));

    }

    public function ct_home_store_default(Request $request)
    {
        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $description=$request->input('ct_home_text_content');
                $dom = new \DomDocument();
                $dom->loadHtml('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);
                $images = $dom->getElementsByTagName('img');
                

                foreach($images as $key => $img){
                    $data_image = $img->getAttribute('src');

                    list($type, $data_image) = explode(';', $data_image);
                    list(, $data_image)      = explode(',', $data_image);
                    $data_image = base64_decode($data_image);

                    $image_name= "/upload_summernote/" . 'postsummernote_' . time().$key.'.png';
                    $path = public_path() . $image_name;

                    file_put_contents($path, $data_image);
                    
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }
        
                $description = $dom->saveHTML();
            /**End Code Upload file gambar untuk summernote */

            $data = new MsCtHome;
            $data->ct_home_name = $request->ct_home_name;
            $data->ct_home_uc = $request->ct_home_uc;
            $data->ct_home_category = $request->ct_home_category;
            $data->ct_home_text_content = $description;
            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Section '$request->ct_home_name' berhasil di buat");
            return redirect(route('ct-home'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-home'));
        }
    }

    public function ct_home_create_custom()
    {
        return view('view_dashboard.ct_home.ct-home-create-custom');
    }

    public function ct_home_store_custom(Request $request)
    {

        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $description=$request->input('ct_home_text_content');
                $dom = new \DomDocument();
                $dom->loadHtml('<?xml encoding="utf-8" ?>' . $description, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD);    
                $images = $dom->getElementsByTagName('img');

                foreach($images as $key => $img){
                    $data_image = $img->getAttribute('src');

                    list($type, $data_image) = explode(';', $data_image);
                    list(, $data_image)      = explode(',', $data_image);
                    $data_image = base64_decode($data_image);

                    $image_name= "/upload_summernote/" . 'postsummernote_' . time().$key.'.png';
                    $path = public_path() . $image_name;

                    file_put_contents($path, $data_image);
                    
                    $img->removeAttribute('src');
                    $img->setAttribute('src', $image_name);
                }

                $description = $dom->saveHTML();
                // dd($description);
            /**End Code Upload file gambar untuk summernote */

            
            $data = new MsCtHome;
            $data->ct_home_name = $request->ct_home_name;
            $data->ct_home_uc = md5($request->ct_home_uc);
            $data->ct_home_category = $request->ct_home_category;
            $data->ct_home_text_content = $description;
            $data->save();

            /** \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error. */
            \DB::commit();
            alert()->success('Selamat',"Section '$request->ct_home_name' berhasil di buat");
            return redirect(route('ct-home'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-home-create-custom'));
        }

    }

    public function ct_home_edit($id)
    {
        $data = MsCtHome::find($id);
        return view('view_dashboard.ct_home.ct-home-edit', compact('data'));
    }

    public function ct_home_update(Request $request, $id)
    {
        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $editor_content=$request->ct_home_text_content;

                $dom = new \DomDocument('1.0', 'UTF-8');
                libxml_use_internal_errors(true);
                $dom->loadHtml('<?xml encoding="utf-8" ?>' . $editor_content);
                $images = $dom->getElementsByTagName('img');
                $bs64='base64';//variable to check the image is base64 or not
                foreach ($images as $k => $img) {
                        $data = $img->getAttribute('src');
                        if (strpos($data,$bs64) == true)//if the Image is base 64
                        {
                            list($type, $data) = explode(';', $data);
                            list(, $data)      = explode(',', $data);
                            $data = base64_decode($data);

                            $image_name= "/upload_summernote/" . 'postimage_' . time().$k.'.png';
                            $path = public_path() . $image_name;

                            
                            file_put_contents($path, $data);
                            $img->removeAttribute('src');
                            $img->setAttribute('src', $image_name);
                        }
                        else//put '/' to prevent lossing image  actual path
                        {
                            $image_name="".$data;
                            $img->setAttribute('src', $image_name);
                        }
                    };
                
                $editor_content_save= $dom->saveHTML();
            /**End Code Upload file gambar untuk summernote */
            

            $data = MsCtHome::find($id);
            $data->ct_home_name = $request->get('ct_home_name');

            if ($data->ct_home_category == "ct_default") {
                # code...
            }elseif ($data->ct_home_category == "ct_custom") {
                $data->ct_home_uc = md5($request->get('ct_home_uc'));
            }

            if (isset($request->ct_home_category)) {
                $data->ct_home_category = $request->get('ct_home_category');
            }
            $data->ct_home_text_content = $editor_content_save;
            
            $data->save();

            /** \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error. */
            \DB::commit();
            alert()->success('Selamat',"Section '$data->ct_home_name' berhasil di update");
            return redirect(route('ct-home'));


        } catch (\Exception $e) {
            $data = MsCtHome::find($id);
        
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-home-edit',  [$data->id]));
        }

    }

    public function ct_home_delete($id)
    {
        $data = MsCtHome::find($id)->delete();
        return redirect(route('ct-home'));
    }
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
