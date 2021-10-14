<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\MsCtContact;


class CtContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MsCtContact::all();

        $md5_judul_kata_pengantar = "453a39e4d68645d23d37397edcfe39bd";
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_iframe_googlemaps = "0de562d7e944350816715e354eaf7a70";
        $md5_alamat_lengkap = "960c7afbb509d8c45e1c3ad7cffa5e5a";
        $md5_nomer_telpon = "fb5f83a16212e2ceb1e2f8d463db63ce";
        $md5_email = "de453e5363ec8fe6fd22a384b9706c9e";
        $md5_social_facebook = "3fb2a72022fb65543404905367c03f8f";
        $md5_social_instagram = "a3e99fbe206a5d254e855343a5283709";
        $md5_social_youtube = "df7f9da343369fa8346435ff41bc5062";

        $cekkode_judul_kata_pengantar = MsCtContact::where([
            ['md5_unik_code', $md5_judul_kata_pengantar]
        ])->first();

        $cekkode_kata_pengantar = MsCtContact::where([
            ['md5_unik_code', $md5_kata_pengantar]
        ])->first();

        $cekkode_iframe_googlemaps = MsCtContact::where([
            ['md5_unik_code', $md5_iframe_googlemaps]
        ])->first();

        $cekkode_alamat_lengkap = MsCtContact::where([
            ['md5_unik_code', $md5_alamat_lengkap]
        ])->first();

        $cekkode_nomer_telpon = MsCtContact::where([
            ['md5_unik_code', $md5_nomer_telpon]
        ])->first();

        $cekkode_email = MsCtContact::where([
            ['md5_unik_code', $md5_email]
        ])->first();

        $cekkode_social_facebook = MsCtContact::where([
            ['md5_unik_code', $md5_social_facebook]
        ])->first();

        $cekkode_social_instagram = MsCtContact::where([
            ['md5_unik_code', $md5_social_instagram]
        ])->first();
        
        $cekkode_social_youtube = MsCtContact::where([
            ['md5_unik_code', $md5_social_youtube]
        ])->first();

        return view('view_dashboard.ct_contact.ct-contact', compact(
            'data',
            'md5_judul_kata_pengantar', 'md5_kata_pengantar', 'md5_iframe_googlemaps', 'md5_alamat_lengkap', 'md5_nomer_telpon', 'md5_email', 'md5_social_facebook', 'md5_social_instagram', 'md5_social_youtube',
            'cekkode_judul_kata_pengantar', 'cekkode_kata_pengantar', 'cekkode_iframe_googlemaps', 'cekkode_alamat_lengkap', 'cekkode_nomer_telpon', 'cekkode_email', 'cekkode_social_facebook', 'cekkode_social_instagram', 'cekkode_social_youtube'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Code kosong
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name_contact' => ['required'],
            'content_contact' => ['required'],
        ]);

        if ($request->name_contact == "453a39e4d68645d23d37397edcfe39bd") {
            $data_name_contact = "Judul Kata Pengantar";
        }elseif ($request->name_contact == "b1c37c503878769522af8754271a5437") {
            $data_name_contact = "Kata Pengantar";
        }elseif ($request->name_contact == "0de562d7e944350816715e354eaf7a70") {
            $data_name_contact = "Iframe Google Maps";
        }elseif ($request->name_contact == "960c7afbb509d8c45e1c3ad7cffa5e5a") {
            $data_name_contact = "Alamat Lengkap";
        }elseif ($request->name_contact == "fb5f83a16212e2ceb1e2f8d463db63ce") {
            $data_name_contact = "Nomor Telpon";
        }elseif ($request->name_contact == "de453e5363ec8fe6fd22a384b9706c9e") {
            $data_name_contact = "Email";
        }elseif ($request->name_contact == "3fb2a72022fb65543404905367c03f8f") {
            $data_name_contact = "Social Facebook";
        }elseif ($request->name_contact == "a3e99fbe206a5d254e855343a5283709") {
            $data_name_contact = "Social Instagram";
        }elseif ($request->name_contact == "df7f9da343369fa8346435ff41bc5062") {
            $data_name_contact = "Social Youtube";
        }


        try {

            \DB::beginTransaction();

            $data = new MsCtContact;
            $data->name_contact = $data_name_contact;
            $data->md5_unik_code = $request->name_contact;
            $data->content_contact = $request->content_contact;
            $data->save();

            
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Data '$data_name_contact' berhasil di buat");
            return back()->withInput();
            

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return back()->withInput();

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
        $data = MsCtContact::find($id);
        return view('view_dashboard.ct_contact.ct-contact-edit', compact('data'));
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

            $data = MsCtContact::find($id);
            $data->name_contact = $request->get('name_contact');
            $data->md5_unik_code = $request->get('md5_unik_code');
            $data->content_contact = $request->get('content_contact');
            $data->save();


            /** \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error. */
            \DB::commit();
            alert()->success('Selamat',"Section '$data->name_contact' berhasil di update");
            return redirect(route('ct-contact.index'));


        } catch (\Exception $e) {
            $data = MsCtHome::find($id);
        
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return redirect(route('ct-contact.edit',  [$data->id]));
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
        //
    }
}
