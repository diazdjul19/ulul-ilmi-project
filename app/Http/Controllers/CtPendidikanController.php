<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Models\MsCtPendidikan;

class CtPendidikanController extends Controller
{
    public function ct_pdd_sdit()
    {
        $data_default = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'SDIT']
        ])->get();

        $data_custom = MsCtPendidikan::where([
            ['ct_pdd_category','=','ct_custom'],
            ['ct_pdd_jp','=', 'SDIT']
        ])->get();

        $md5_logo_sdit = "3781386a9f619099ee9e25e48e6b7642";
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_visi = "7e25e6834d1b8b8b0eef8686395f93fc";
        $md5_misi = "18e86c80ad2b718e43bbae4fb05a87aa";
        $md5_infolain_01 = "88908d0842ba3ff7b9c55c7d01d2d419";
        $md5_infolain_02 = "41eebb479b695b079eee0cfa861e3bcf";
        $md5_infolain_03 = "e4b021a1b692d782eb1c0568c83679c1";
        $md5_infolain_04 = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";

        $cekkode_logo_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_sdit],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();
        
        $cekkode_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();
        
        $cekkode_visi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_misi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();
        



        return view('view_dashboard.ct_pendidikan.ct-pdd-sdit',
            compact(
                'data_default', 'data_custom',
                'md5_logo_sdit', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'cekkode_logo_sdit', 'cekkode_kata_pengantar', 'cekkode_visi', 'cekkode_misi', 'cekkode_infolain_01', 'cekkode_infolain_02', 'cekkode_infolain_03', 'cekkode_infolain_04'
            )
        );
    }

    public function ct_pdd_mts()
    {
        $data_default = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MTS']
        ])->get();

        $data_custom = MsCtPendidikan::where([
            ['ct_pdd_category','=','ct_custom'],
            ['ct_pdd_jp','=', 'MTS']
        ])->get();

        $md5_logo_mts = "a80139aef2dd35393f3cc81af12e5655";
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_visi = "7e25e6834d1b8b8b0eef8686395f93fc";
        $md5_misi = "18e86c80ad2b718e43bbae4fb05a87aa";
        $md5_infolain_01 = "88908d0842ba3ff7b9c55c7d01d2d419";
        $md5_infolain_02 = "41eebb479b695b079eee0cfa861e3bcf";
        $md5_infolain_03 = "e4b021a1b692d782eb1c0568c83679c1";
        $md5_infolain_04 = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";

        $cekkode_logo_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_mts],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();
        
        $cekkode_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();
        
        $cekkode_visi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_misi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();



        return view('view_dashboard.ct_pendidikan.ct-pdd-mts',
            compact(
                'data_default', 'data_custom',
                'md5_logo_mts', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'cekkode_logo_mts', 'cekkode_kata_pengantar', 'cekkode_visi', 'cekkode_misi', 'cekkode_infolain_01', 'cekkode_infolain_02', 'cekkode_infolain_03', 'cekkode_infolain_04'
            )
        );
    }

    public function ct_pdd_ma()
    {
        $data_default = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MA']
        ])->get();

        $data_custom = MsCtPendidikan::where([
            ['ct_pdd_category','=','ct_custom'],
            ['ct_pdd_jp','=', 'MA']
        ])->get();

        $md5_logo_ma = "73cb4ab8f6b6886d28850bfe65d5043c";
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_visi = "7e25e6834d1b8b8b0eef8686395f93fc";
        $md5_misi = "18e86c80ad2b718e43bbae4fb05a87aa";
        $md5_infolain_01 = "88908d0842ba3ff7b9c55c7d01d2d419";
        $md5_infolain_02 = "41eebb479b695b079eee0cfa861e3bcf";
        $md5_infolain_03 = "e4b021a1b692d782eb1c0568c83679c1";
        $md5_infolain_04 = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";

        $cekkode_logo_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_ma],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();
        
        $cekkode_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();
        
        $cekkode_visi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_misi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();



        return view('view_dashboard.ct_pendidikan.ct-pdd-ma',
            compact(
                'data_default', 'data_custom',
                'md5_logo_ma', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'cekkode_logo_ma', 'cekkode_kata_pengantar', 'cekkode_visi', 'cekkode_misi', 'cekkode_infolain_01', 'cekkode_infolain_02', 'cekkode_infolain_03', 'cekkode_infolain_04'
            )
        );
    }

    public function ct_pdd_mdt()
    {
        $data_default = MsCtPendidikan::where([
            ['ct_pdd_category', '=', 'ct_default'],
            ['ct_pdd_jp','=', 'MDT']
        ])->get();

        $data_custom = MsCtPendidikan::where([
            ['ct_pdd_category','=','ct_custom'],
            ['ct_pdd_jp','=', 'MDT']
        ])->get();

        $md5_logo_mdt = "9cf4942380c3b730db21803e74d1bb96";
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_visi = "7e25e6834d1b8b8b0eef8686395f93fc";
        $md5_misi = "18e86c80ad2b718e43bbae4fb05a87aa";
        $md5_infolain_01 = "88908d0842ba3ff7b9c55c7d01d2d419";
        $md5_infolain_02 = "41eebb479b695b079eee0cfa861e3bcf";
        $md5_infolain_03 = "e4b021a1b692d782eb1c0568c83679c1";
        $md5_infolain_04 = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";

        $cekkode_logo_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_mdt],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();
        
        $cekkode_kata_pengantar = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();
        
        $cekkode_visi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_misi = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_01 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_02 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_03 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_04 = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();



        return view('view_dashboard.ct_pendidikan.ct-pdd-mdt',
            compact(
                'data_default', 'data_custom',
                'md5_logo_mdt', 'md5_kata_pengantar', 'md5_visi', 'md5_misi', 'md5_infolain_01', 'md5_infolain_02', 'md5_infolain_03', 'md5_infolain_04',
                'cekkode_logo_mdt', 'cekkode_kata_pengantar', 'cekkode_visi', 'cekkode_misi', 'cekkode_infolain_01', 'cekkode_infolain_02', 'cekkode_infolain_03', 'cekkode_infolain_04'
            )
        );
    }

    public function ct_pdd_create_default()
    {
        $md5_logo_sdit = "3781386a9f619099ee9e25e48e6b7642";
        $md5_logo_mts = "a80139aef2dd35393f3cc81af12e5655";
        $md5_logo_ma = "73cb4ab8f6b6886d28850bfe65d5043c";
        $md5_logo_mdt = "9cf4942380c3b730db21803e74d1bb96";
        
        $md5_kata_pengantar = "b1c37c503878769522af8754271a5437";
        $md5_visi = "7e25e6834d1b8b8b0eef8686395f93fc";
        $md5_misi = "18e86c80ad2b718e43bbae4fb05a87aa";
        $md5_infolain_01 = "88908d0842ba3ff7b9c55c7d01d2d419";
        $md5_infolain_02 = "41eebb479b695b079eee0cfa861e3bcf";
        $md5_infolain_03 = "e4b021a1b692d782eb1c0568c83679c1";
        $md5_infolain_04 = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";
        
        
        // Cek Kode SDIT
        $cekkode_logo_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_sdit],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();
        
        $cekkode_kata_pengantar_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();
        
        $cekkode_visi_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_misi_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_01_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_02_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_03_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();

        $cekkode_infolain_04_sdit = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'SDIT']
        ])->first();



        // Cek Kode MTS
        $cekkode_logo_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_mts],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();
        
        $cekkode_kata_pengantar_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();
        
        $cekkode_visi_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_misi_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_01_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_02_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_03_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();

        $cekkode_infolain_04_mts = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MTS']
        ])->first();



        // Cek Kode MA
        $cekkode_logo_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_ma],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();
        
        $cekkode_kata_pengantar_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();
        
        $cekkode_visi_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_misi_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_01_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_02_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_03_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();

        $cekkode_infolain_04_ma = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MA']
        ])->first();



        // Cek Kode MDT
        $cekkode_logo_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_logo_mdt],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();
        
        $cekkode_kata_pengantar_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_kata_pengantar],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();
        
        $cekkode_visi_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_visi],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_misi_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_misi],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_01_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_01],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_02_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_02],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_03_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_03],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();

        $cekkode_infolain_04_mdt = MsCtPendidikan::where([
            ['ct_pdd_uc', $md5_infolain_04],
            ['ct_pdd_jp', '=', 'MDT']
        ])->first();
        return view('view_dashboard.ct_pendidikan.ct-pdd-create-default', 
            compact(
                'cekkode_logo_sdit','cekkode_kata_pengantar_sdit', 'cekkode_visi_sdit', 'cekkode_misi_sdit', 'cekkode_infolain_01_sdit', 'cekkode_infolain_02_sdit', 'cekkode_infolain_03_sdit', 'cekkode_infolain_04_sdit',
                'cekkode_logo_mts','cekkode_kata_pengantar_mts', 'cekkode_visi_mts', 'cekkode_misi_mts', 'cekkode_infolain_01_mts', 'cekkode_infolain_02_mts', 'cekkode_infolain_03_mts', 'cekkode_infolain_04_mts',
                'cekkode_logo_ma','cekkode_kata_pengantar_ma', 'cekkode_visi_ma', 'cekkode_misi_ma', 'cekkode_infolain_01_ma', 'cekkode_infolain_02_ma', 'cekkode_infolain_03_ma', 'cekkode_infolain_04_ma',
                'cekkode_logo_mdt','cekkode_kata_pengantar_mdt', 'cekkode_visi_mdt', 'cekkode_misi_mdt', 'cekkode_infolain_01_mdt', 'cekkode_infolain_02_mdt', 'cekkode_infolain_03_mdt', 'cekkode_infolain_04_mdt'
            )
        );
    }

    public function ct_pdd_store_default(Request $request)
    {

        $this->validate($request, [
            'ct_pdd_name' => ['required'],
            'ct_pdd_jp' => ['required'],
            'ct_pdd_category' => ['required'],
        ]);


        if ($request->ct_pdd_name == "Logo SDIT") {
            $data_uc = "3781386a9f619099ee9e25e48e6b7642";
        }elseif ($request->ct_pdd_name == "Logo MTS") {
            $data_uc = "a80139aef2dd35393f3cc81af12e5655";
        }elseif ($request->ct_pdd_name == "Logo MA") {
            $data_uc = "73cb4ab8f6b6886d28850bfe65d5043c";
        }elseif ($request->ct_pdd_name == "Logo MDT") {
            $data_uc = "9cf4942380c3b730db21803e74d1bb96";
        }

        elseif ($request->ct_pdd_name == "Kata Pengantar") {
            $data_uc = "b1c37c503878769522af8754271a5437";
        }
        
        elseif ($request->ct_pdd_name == "Visi SDIT") {
            $data_uc = "7e25e6834d1b8b8b0eef8686395f93fc";
        }elseif ($request->ct_pdd_name == "Misi SDIT") {
            $data_uc = "18e86c80ad2b718e43bbae4fb05a87aa";
        }elseif ($request->ct_pdd_name == "Visi MTS") {
            $data_uc = "7e25e6834d1b8b8b0eef8686395f93fc";
        }elseif ($request->ct_pdd_name == "Misi MTS") {
            $data_uc = "18e86c80ad2b718e43bbae4fb05a87aa";
        }elseif ($request->ct_pdd_name == "Visi MA") {
            $data_uc = "7e25e6834d1b8b8b0eef8686395f93fc";
        }elseif ($request->ct_pdd_name == "Misi MA") {
            $data_uc = "18e86c80ad2b718e43bbae4fb05a87aa";
        }elseif ($request->ct_pdd_name == "Visi MDT") {
            $data_uc = "7e25e6834d1b8b8b0eef8686395f93fc";
        }elseif ($request->ct_pdd_name == "Misi MDT") {
            $data_uc = "18e86c80ad2b718e43bbae4fb05a87aa";
        }
        
        elseif ($request->ct_pdd_name == "Info Lain 01") {
            $data_uc = "88908d0842ba3ff7b9c55c7d01d2d419";
        }elseif ($request->ct_pdd_name == "Info Lain 02") {
            $data_uc = "41eebb479b695b079eee0cfa861e3bcf";
        }elseif ($request->ct_pdd_name == "Info Lain 03") {
            $data_uc = "e4b021a1b692d782eb1c0568c83679c1";
        }elseif ($request->ct_pdd_name == "Info Lain 04") {
            $data_uc = "e941e1dbdc2c357d8e8de6d0b9f8c0fd";
        }

        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $description=$request->input('ct_pdd_text_content');
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

            $data = new MsCtPendidikan;
            $data->ct_pdd_name = $request->ct_pdd_name;
            $data->ct_pdd_uc = $data_uc;
            $data->ct_pdd_jp = $request->ct_pdd_jp;
            $data->ct_pdd_category = $request->ct_pdd_category;
            $data->ct_pdd_text_content = $description;
            $data->save();
            
            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Section $request->ct_pdd_name berhasil di buat");
            if ($request->ct_pdd_jp == "SDIT") {
                return redirect(route('ct-pdd-sdit'));
            }elseif ($request->ct_pdd_jp == "MTS") {
                return redirect(route('ct-pdd-mts'));
            }elseif ($request->ct_pdd_jp == "MA") {
                return redirect(route('ct-pdd-ma'));
            }elseif ($request->ct_pdd_jp == "MDT") {
                return redirect(route('ct-pdd-mdt'));
            }

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            if ($request->ct_pdd_jp == "SDIT") {
                return redirect(route('ct-pdd-sdit'));
            }elseif ($request->ct_pdd_jp == "MTS") {
                return redirect(route('ct-pdd-mts'));
            }elseif ($request->ct_pdd_jp == "MA") {
                return redirect(route('ct-pdd-ma'));
            }elseif ($request->ct_pdd_jp == "MDT") {
                return redirect(route('ct-pdd-mdt'));
            }

        }
    }

    public function ct_pdd_create_custom()
    {
        return view('view_dashboard.ct_pendidikan.ct-pdd-create-custom');
    }

    public function ct_pdd_store_custom(Request $request)
    {
        try {

            \DB::beginTransaction();

            /**Start Cde Upload file gambar untuk summernote */
                $description=$request->input('ct_pdd_text_content');
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

            $data = new MsCtPendidikan;
            $data->ct_pdd_name = $request->ct_pdd_name;
            $data->ct_pdd_uc = md5($request->ct_pdd_uc);
            $data->ct_pdd_jp = $request->ct_pdd_jp;
            $data->ct_pdd_category = $request->ct_pdd_category;
            $data->ct_pdd_text_content = $description;
            $data->save();

            // \DB::commit() ini akan menginput data jika dari proses diatas tidak ada yg salah atau error.
            \DB::commit();
            alert()->success('Selamat',"Section '$request->ct_pdd_name' berhasil di buat");
            if ($request->ct_pdd_jp == "SDIT") {
                return redirect(route('ct-pdd-sdit'));
            }elseif ($request->ct_pdd_jp == "MTS") {
                return redirect(route('ct-pdd-mts'));
            }elseif ($request->ct_pdd_jp == "MA") {
                return redirect(route('ct-pdd-ma'));
            }elseif ($request->ct_pdd_jp == "MDT") {
                return redirect(route('ct-pdd-mdt'));
            }

        } catch (\Exception $e) {
            \DB::rollback();
            alert()->error('Error',$e->getMessage());
            if ($request->ct_pdd_jp == "SDIT") {
                return redirect(route('ct-pdd-sdit-create-custom'));
            }elseif ($request->ct_pdd_jp == "MTS") {
                return redirect(route('ct-pdd-mts-create-custom'));
            }elseif ($request->ct_pdd_jp == "MA") {
                return redirect(route('ct-pdd-ma-create-custom'));
            }elseif ($request->ct_pdd_jp == "MDT") {
                return redirect(route('ct-pdd-mdt-create-custom'));
            }
        }
    }

    public function ct_pdd_edit($id)
    {
        $data = MsCtPendidikan::find($id);
        return view('view_dashboard.ct_pendidikan.ct-pdd-edit', compact('data'));
    }

    public function ct_pdd_update(Request $request, $id)
    {
        /**Start Cde Upload file gambar untuk summernote */
            $editor_content=$request->ct_pdd_text_content;

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


        $data = MsCtPendidikan::find($id);
        $data->ct_pdd_name = $request->get('ct_pdd_name');

        if ($data->ct_pdd_category == "ct_default") {
            # code...
        }elseif ($data->ct_pdd_category == "ct_custom") {
            if ($data->ct_pdd_uc == $request->ct_pdd_uc) {
                $data->ct_pdd_uc = $request->get('ct_pdd_uc');
            }else {
                $data->ct_pdd_uc = md5($request->get('ct_pdd_uc'));
            }
        }

        if (isset($request->ct_pdd_category)) {
            $data->ct_pdd_category = $request->get('ct_pdd_category');
        }
        $data->ct_pdd_jp = $request->get('ct_pdd_jp');
        $data->ct_pdd_text_content = $editor_content;

        
        $data->save();
        alert()->success('Selamat',"Section $request->ct_home_name berhasil di Update");
        if ($request->ct_pdd_jp == "SDIT") {
            return redirect(route('ct-pdd-sdit'));
        }elseif ($request->ct_pdd_jp == "MTS") {
            return redirect(route('ct-pdd-mts'));
        }elseif ($request->ct_pdd_jp == "MA") {
            return redirect(route('ct-pdd-ma'));
        }elseif ($request->ct_pdd_jp == "MDT") {
            return redirect(route('ct-pdd-mdt'));
        }

    }

    public function ct_pdd_delete($id)
    {
        $data_redirect = MsCtPendidikan::find($id);
        $data = MsCtPendidikan::find($id)->delete();

        if ($data_redirect->ct_pdd_jp == "SDIT") {
            return redirect(route('ct-pdd-sdit'));
        }elseif ($data_redirect->ct_pdd_jp == "MTS") {
            return redirect(route('ct-pdd-mts'));
        }elseif ($data_redirect->ct_pdd_jp == "MA") {
            return redirect(route('ct-pdd-ma'));
        }elseif ($data_redirect->ct_pdd_jp == "MDT") {
            return redirect(route('ct-pdd-mdt'));
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
