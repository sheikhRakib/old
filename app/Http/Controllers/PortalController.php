<?php

namespace App\Http\Controllers;

class PortalController extends Controller
{
    public function index()
    {
        return view('portal.index');
    }

    public function inventory()
    {
        return view('portal.index');
    }

    public function userprofile()
    {
        return view('portal.userprofile');
    }
}
