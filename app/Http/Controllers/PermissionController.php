<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $data['permissions'] = Permission::all();
        return view('portal.permissions.index', $data);
    }

    public function edit(Permission $permission)
    {
        return view('portal.permissions.edit', compact('permission'));
    }

    public function update(Permission $permission, Request $request)
    {
        $request->validate([
            'displayname' => 'string',
            'description' => 'string',
        ]);
        $permission->displayname = $request['displayname'];
        $permission->description = $request['description'];
        $permission->save();

        Session::flash('success', 'Permission Details Updated');
        return redirect()->route('portal.permissions.index');
    }
}
