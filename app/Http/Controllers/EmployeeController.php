<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        $data['users'] = User::all();
        return view('portal.employee.index', $data);
    }

    public function invite() {
        return view('portal.employee.invite');
    }
}
