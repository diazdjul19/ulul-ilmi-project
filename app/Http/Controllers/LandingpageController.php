<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\Models\MsCtHome;
use App\Models\MsCtPendidikan;
use App\Models\MsCtGallery;
use App\Models\MsCtContact;
use App\Models\MsCtInfoPendaftaran;
use App\Models\MsCtCreator;





class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $md5_text_on_bgimg = MsCtHome::where([
            ['ct_home_category', '=', 'ct_default'],
            ['ct_home_uc','=', '13299d20250b1fbd9f7077363b7cf053'],
        ])->first();

        $md5_text_sambutan = MsCtHome::where([
            ['ct_home_category', '=', 'ct_default'],
            ['ct_home_uc','=', 'e2b42d12d3dae75f352f37cb73e466f0'],
        ])->first();

        $md5_text_content_berita = MsCtHome::where([
            ['ct_home_category', '=', 'ct_default'],
            ['ct_home_uc','=', '0c98894eb5a8c4eec794cece29615995'],
        ])->first();

        $data_ct_home_custom = MsCtHome::where([
            ['ct_home_category', '=', 'ct_custom']
        ])->get();

        return view('view_landingpage.index-landingpage', compact(
            [
                'md5_text_on_bgimg', 'md5_text_sambutan', 'md5_text_content_berita',
                'data_ct_home_custom'
            ]
        ));
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
        //
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
        //
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
        //
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










    public function pendidikan_sdit_web()
    {
        $md5_logo_sdit = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', '3781386a9f619099ee9e25e48e6b7642'],
        ])->first();

        $md5_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', 'b1c37c503878769522af8754271a5437'],
        ])->first();
        
        $md5_visi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', '7e25e6834d1b8b8b0eef8686395f93fc'],
        ])->first();

        $md5_misi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', '18e86c80ad2b718e43bbae4fb05a87aa'],
        ])->first();

        $md5_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', '88908d0842ba3ff7b9c55c7d01d2d419'],
        ])->first();

        $md5_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', '41eebb479b695b079eee0cfa861e3bcf'],
        ])->first();

        $md5_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', 'e4b021a1b692d782eb1c0568c83679c1'],
        ])->first();

        $md5_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT'],
            ['ct_pdd_uc','=', 'e941e1dbdc2c357d8e8de6d0b9f8c0fd'],
        ])->first();


        
        $data_gallery_sdit = MsCtGallery::where([
            ['category_image', '=', 'sdit_image'],
        ])->paginate(4);

        $data_ct_custom_sdit = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_custom'],
            ['ct_pdd_jp','=', 'SDIT'],
        ])->get();

        return view('view_landingpage.pendidikan-sdit-web',
            compact(
                [
                    'md5_logo_sdit', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                    'data_gallery_sdit',
                    'data_ct_custom_sdit'
                ]
            )
        );
    }

    public function pendidikan_mts_web()
    {
        $md5_logo_mts = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', 'a80139aef2dd35393f3cc81af12e5655'],
        ])->first();

        $md5_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', 'b1c37c503878769522af8754271a5437'],
        ])->first();
        
        $md5_visi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', '7e25e6834d1b8b8b0eef8686395f93fc'],
        ])->first();

        $md5_misi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', '18e86c80ad2b718e43bbae4fb05a87aa'],
        ])->first();

        $md5_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', '88908d0842ba3ff7b9c55c7d01d2d419'],
        ])->first();

        $md5_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', '41eebb479b695b079eee0cfa861e3bcf'],
        ])->first();

        $md5_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', 'e4b021a1b692d782eb1c0568c83679c1'],
        ])->first();

        $md5_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS'],
            ['ct_pdd_uc','=', 'e941e1dbdc2c357d8e8de6d0b9f8c0fd'],
        ])->first();


        $data_gallery_mts = MsCtGallery::where([
            ['category_image', '=', 'mts_image'],
        ])->paginate(4);

        $data_ct_custom_mts = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_custom'],
            ['ct_pdd_jp','=', 'MTS'],
        ])->get();

        return view('view_landingpage.pendidikan-mts-web', compact(
            [
                'md5_logo_mts', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'data_gallery_mts',
                'data_ct_custom_mts'
            ]
        ));
    }

    public function pendidikan_ma_web()
    {

        $md5_logo_ma = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', '73cb4ab8f6b6886d28850bfe65d5043c'],
        ])->first();

        $md5_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', 'b1c37c503878769522af8754271a5437'],
        ])->first();
        
        $md5_visi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', '7e25e6834d1b8b8b0eef8686395f93fc'],
        ])->first();

        $md5_misi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', '18e86c80ad2b718e43bbae4fb05a87aa'],
        ])->first();

        $md5_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', '88908d0842ba3ff7b9c55c7d01d2d419'],
        ])->first();

        $md5_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', '41eebb479b695b079eee0cfa861e3bcf'],
        ])->first();

        $md5_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', 'e4b021a1b692d782eb1c0568c83679c1'],
        ])->first();

        $md5_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA'],
            ['ct_pdd_uc','=', 'e941e1dbdc2c357d8e8de6d0b9f8c0fd'],
        ])->first();

        $data_gallery_ma = MsCtGallery::where([
            ['category_image', '=', 'ma_image'],
        ])->paginate(4);

        $data_ct_custom_ma = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_custom'],
            ['ct_pdd_jp','=', 'MA'],
        ])->get();

        return view('view_landingpage.pendidikan-ma-web', compact(
            [
                'md5_logo_ma', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'data_gallery_ma',
                'data_ct_custom_ma'
            ]
        ));
    }

    public function pendidikan_mdt_web()
    {

        $md5_logo_mdt = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', '9cf4942380c3b730db21803e74d1bb96'],
        ])->first();

        $md5_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', 'b1c37c503878769522af8754271a5437'],
        ])->first();
        
        $md5_visi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', '7e25e6834d1b8b8b0eef8686395f93fc'],
        ])->first();

        $md5_misi = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', '18e86c80ad2b718e43bbae4fb05a87aa'],
        ])->first();

        $md5_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', '88908d0842ba3ff7b9c55c7d01d2d419'],
        ])->first();

        $md5_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', '41eebb479b695b079eee0cfa861e3bcf'],
        ])->first();

        $md5_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', 'e4b021a1b692d782eb1c0568c83679c1'],
        ])->first();

        $md5_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT'],
            ['ct_pdd_uc','=', 'e941e1dbdc2c357d8e8de6d0b9f8c0fd'],
        ])->first();

        $data_gallery_mdt = MsCtGallery::where([
            ['category_image', '=', 'mdt_image'],
        ])->paginate(4);

        $data_ct_custom_mdt = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_custom'],
            ['ct_pdd_jp','=', 'MDT'],
        ])->get();

        return view('view_landingpage.pendidikan-mdt-web', compact(
            [
                'md5_logo_mdt', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'data_gallery_mdt',
                'data_ct_custom_mdt'
            ]
        ));
    }

    public function gallery_web()
    {
        $data_gallery_other = MsCtGallery::where([
            ['category_image', '=', 'other_image'],
        ])->paginate(12);

        return view('view_landingpage.gallery-web', compact('data_gallery_other'));
    }

    public function content_web()
    {
        return view('view_landingpage.content-web');
    }

    public function contact_web()
    {

        $md5_judul_kata_pengantar = MsCtContact::where([
            ['md5_unik_code','=', '453a39e4d68645d23d37397edcfe39bd'],
        ])->first();
        
        $md5_kata_pengantar = MsCtContact::where([
            ['md5_unik_code','=', 'b1c37c503878769522af8754271a5437'],
        ])->first();

        $md5_iframe_googlemaps = MsCtContact::where([
            ['md5_unik_code','=', '0de562d7e944350816715e354eaf7a70'],
        ])->first();

        $md5_alamat_lengkap = MsCtContact::where([
            ['md5_unik_code','=', '960c7afbb509d8c45e1c3ad7cffa5e5a'],
        ])->first();

        $md5_nomer_telpon = MsCtContact::where([
            ['md5_unik_code','=', 'fb5f83a16212e2ceb1e2f8d463db63ce'],
        ])->first();

        $md5_email = MsCtContact::where([
            ['md5_unik_code','=', 'de453e5363ec8fe6fd22a384b9706c9e'],
        ])->first();

        $md5_social_facebook = MsCtContact::where([
            ['md5_unik_code','=', '3fb2a72022fb65543404905367c03f8f'],
        ])->first();

        $md5_social_instagram = MsCtContact::where([
            ['md5_unik_code','=', 'a3e99fbe206a5d254e855343a5283709'],
        ])->first();

        $md5_social_youtube = MsCtContact::where([
            ['md5_unik_code','=', 'df7f9da343369fa8346435ff41bc5062'],
        ])->first();

        return view('view_landingpage.contact-web', compact([
            'md5_judul_kata_pengantar', 'md5_kata_pengantar', 'md5_iframe_googlemaps', 'md5_alamat_lengkap', 'md5_nomer_telpon', 'md5_email', 'md5_social_facebook', 'md5_social_instagram', 'md5_social_youtube',
        ]));
    }

    public function info_ppdb_web()
    {
        $data = MsCtInfoPendaftaran::where('status', '=', 'active')->first();

        return view('view_landingpage.info-ppdb-web', compact('data'));
    }










    public function logreg_creator()
    {
        return view('view_landingpage.logreg_creator.logreg-creator');
    }

    public function regist_creator(Request $request)
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
            // alert()->success('Register Success',"Data anda akan segera di periksa oleh ADMIN, Segera cek Alamat Email anda untuk melihat Status registrasi anda");
            \Session::flash('success_register');
            return back()->withInput();
            

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            return back()->withInput();

        }
    }

    public function login_store_creator(Request $request)
    {
        $email_creator = MsCtCreator::where('login_email', $request->login_email)->first();
        
        if ($email_creator) {
            if (\Hash::check($request->login_password, $email_creator->login_password)) {

                \Session::put('creator', $email_creator);
                return redirect(route('home-creator'));
            }else {
                \Session::flash('galog_email_or_password', 'Email atau Password anda tidak cocok !');
                return redirect(route('logreg-creator'));
            }
        }else {
            \Session::flash('galog_no_email', 'Email anda belum terdaftar, Silahkan registrasi terlebih dahulu ya !');
                return redirect(route('logreg-creator'));
        }
    }
}
