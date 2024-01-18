<?php

namespace App\Http\Controllers;

use App\Models\Building;
use App\Models\User;

class PortalController extends Controller
{
    public function index()
    {
        $data['buildingCount'] = Building::count();
        $data['memberCount'] = User::where('active', true)->count();

        return view('portal.index', $data);
    }

    public function userprofile()
    {
        return view('portal.userprofile');
    }
}
