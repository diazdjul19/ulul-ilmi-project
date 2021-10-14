<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MsCtInfoPendaftaran;

class CtInfoPendaftaran extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MsCtInfoPendaftaran::all();
        return view('view_dashboard.ct_info_pendaftaran.ct-info-pendaftaran', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('view_dashboard.ct_info_pendaftaran.ct-info-pendaftaran-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $description=$request->input('content_section');
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
        
            $data = new MsCtInfoPendaftaran();
            $data->name_section = $request->name_section;
            $data->md5_uc = md5(time());
            $data->status = "pending";
            $data->content_section = $description;

            if (isset($request->file_information)) {
                $uniqueFileName = $request->get('name_section') . "-" .  uniqid() . '.' . $request->file_information->getClientOriginalExtension();
                
                // $request->file('file_information')->move(public_path('files_information_ppdb') . $uniqueFileName);
                $request->file('file_information')->move(storage_path('app/public/files_information_ppdb/'), $uniqueFileName);

                $data->file_information = $uniqueFileName;
            }

            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Section $data->name_section berhasil di tambah.");
            return redirect(route('ct-info-ppdb.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-info-ppdb.index'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = MsCtInfoPendaftaran::find($id);
        return view('view_dashboard.ct_info_pendaftaran.ct-info-pendaftaran-edit', compact('data'));
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
        
        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $editor_content = $request->content_section;

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
                
                $editor_content_save = $dom->saveHTML();
            /**End Code Upload file gambar untuk summernote */

            $data = MsCtInfoPendaftaran::find($id);
            $data->name_section = $request->get('name_section');
            $data->content_section = $editor_content_save;
            
            if (isset($request->file_information)) {
                $uniqueFileName = $request->get('name_section') . "-" .  uniqid() . '.' . $request->file_information->getClientOriginalExtension();
                
                // $request->file('file_information')->move(public_path('files_information_ppdb') . $uniqueFileName);
                $request->file('file_information')->move(storage_path('app/public/files_information_ppdb/'), $uniqueFileName);

                $data->file_information = $uniqueFileName;
            }

            $data->save();
    

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Section $data->name_section berhasil di edit.");
            return redirect(route('ct-info-ppdb.index'));

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-info-ppdb.index'));
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
        $data = MsCtInfoPendaftaran::find($id)->delete();
        return redirect(route('ct-info-ppdb.index'));
        
    }


    public function ct_info_ppdb_active($id)
    {
        $noactive = MsCtInfoPendaftaran::where([
            ['status', '=', 'active'],
            ['id','!=', $id]
        ]);
        $noactive->update(['status' => 'not_active']);


        $data = MsCtInfoPendaftaran::find($id);
        $data->update(['status' => 'active']);

        return redirect(route('ct-info-ppdb.index'));
    }

    public function ct_info_ppdb_not_active($id)
    {
        $data = MsCtInfoPendaftaran::find($id);
        $data->update(['status' => 'not_active']);

        return redirect(route('ct-info-ppdb.index'));
    }
}
