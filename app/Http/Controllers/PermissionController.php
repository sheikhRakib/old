<?php

namespace App\Http\Controllers;

use App\Http\Requests\PermissionRequest;
use App\Services\PermissionService;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    protected PermissionService $permissionService;

    public function __construct(PermissionService $permissionService)
    {
        $this->permissionService = $permissionService;
    }

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
        $input['displayname'] = $request['displayname'];
        $input['description'] = $request['description'];
        $this->permissionService->updatePermission($permission, $input);

        Session::flash('success', 'Permission Details Updated');
        return redirect()->route('portal.permission.index');
    }
}
