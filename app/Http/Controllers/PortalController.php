<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
