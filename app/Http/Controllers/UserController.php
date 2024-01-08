<?php

namespace App\Http\Controllers;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $data['users'] = User::all();

        return view('portal.employee.index', $data);
    }
}
