<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class DashboardCreator extends Controller
{
    public function index()
    {
        $get_session = \Session::get('creator');
        return view('view_dashbaord_creator.home-creator', compact('get_session'));
    }

    public function logout_creator()
    {
        \Session::flush();
        return redirect()->back();
    }
}
