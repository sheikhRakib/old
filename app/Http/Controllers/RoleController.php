<?php

namespace App\Http\Controllers;

use App\Http\Requests\RoleCreateRequest;
use App\Http\Requests\RoleUpdateRequest;
use App\Services\RoleService;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    protected RoleService $roleService;

    public function __construct(RoleService $roleService)
    {
        $this->roleService = $roleService;
    }

    public function index()
    {
        $data['roles'] = Role::all();

        return view('portal.role.index', $data);
    }

    public function create()
    {
        return view('portal.role.create');
    }

    public function store(RoleCreateRequest $request)
    {
        $input['name'] = $request['name'];
        $input['displayname'] = $request['displayname'];
        $input['description'] = $request['description'];
        $this->roleService->storeRole(new Role(), $input);

        Session::flash('success', 'Role Created');
        return redirect()->route('portal.role.index');
    }

    public function show(Role $role)
    {
        return view('portal.role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('portal.role.edit', compact('role'));
    }

    public function update(RoleUpdateRequest $request, Role $role)
    {
        $input['displayname'] = $request['displayname'];
        $input['description'] = $request['description'];
        $this->roleService->updateRole($role, $input);

        Session::flash('success', 'Role Updated');
        return redirect()->route('portal.role.show', $role);
    }

    public function destroy(Role $role)
    {
        if($role->users()->count())
        {
            Session::flash('error', 'One or more members have this role.');
            return redirect()->back();
        }

        $this->roleService->deleteRole($role);

        Session::flash('success', 'Role Deleted');
        return redirect()->back();

    }
}
