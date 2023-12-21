<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index() {
        return view('portal.employee.index');
    }

    public function invite() {
        return view('portal.employee.invite');
    }
}
