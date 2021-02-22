<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingpageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('view_landingpage.index-landingpage');
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
        return view('view_landingpage.pendidikan-sdit-web');
    }

    public function pendidikan_mts_web()
    {
        return view('view_landingpage.pendidikan-mts-web');
    }

    public function pendidikan_ma_web()
    {
        return view('view_landingpage.pendidikan-ma-web');
    }

    public function pendidikan_mdt_web()
    {
        return view('view_landingpage.pendidikan-mdt-web');
    }

    public function gallery_web()
    {
        return view('view_landingpage.gallery-web');
    }

    public function content_web()
    {
        return view('view_landingpage.content-web');
    }

    public function contact_web()
    {
        return view('view_landingpage.contact-web');
    }

    
}
