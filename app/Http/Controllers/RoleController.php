<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Services\RoleService;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $data['roles'] = Role::all();

        return view('portal.role.index', $data);
    }

    public function create()
    {
        return view('portal.role.create');
    }

    public function store(StoreRoleRequest $request)
    {
        $input = [
            'name' => $request['name'],
            'displayname' => $request['displayname'],
            'description' => $request['description'],
        ];

        return RoleService::store($input);
    }

    public function show(Role $role)
    {
        return view('portal.role.show', compact('role'));
    }

    public function edit(Role $role)
    {
        return view('portal.role.edit', compact('role'));
    }

    public function update(UpdateRoleRequest $request, Role $role)
    {
        $input = [
            'displayname' => $request['displayname'],
            'description' => $request['description'],
        ];

        return RoleService::update($role, $input);
    }

    public function destroy(Role $role)
    {
        return RoleService::delete($role);
    }
}
