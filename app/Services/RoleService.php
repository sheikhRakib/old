<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class RoleService
{
    public static function store(array $input)
    {
        $role = new Role();
        $role->name = $input['name'];
        $role->displayname = $input['displayname'];
        $role->description = $input['description'];
        $role->save();

        Session::flash('success', 'New Role Created');
        return redirect()->route('portal.role.index');
    }

    public static function update(Role $role, array $input)
    {
        $role->displayname = $input['displayname'];
        $role->description = $input['description'];
        $role->save();

        Session::flash('success', 'Role Updated');
        return redirect()->route('portal.role.show', $role);
    }

    public static function delete(Role $role)
    {
        if ($role->users()->count()) {
            Session::flash('error', 'One or more members have this role.');
            return redirect()->back();
        }

        $role->delete();

        Session::flash('success', 'Role Deleted');
        return redirect()->back();
    }
}
