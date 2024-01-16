<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Services\PermissionService;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $data['permissions'] = Permission::all();

        return view('portal.permission.index', $data);
    }

    public function edit(Permission $permission)
    {
        return view('portal.permission.edit', compact('permission'));
    }

    public function update(PermissionRequest $request, Permission $permission)
    {
        $input = [
            'displayname' => $request['displayname'],
            'description' => $request['description'],
        ];

        return PermissionService::update($permission, $input);
    }
}
