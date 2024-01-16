<?php

namespace App\Services;

use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;

class PermissionService
{
    public static function update(Permission $permission, array $input)
    {
        $permission->displayname = $input['displayname'];
        $permission->description = $input['description'];
        $permission->save();

        Session::flash('success', 'Permission Details Updated');
        return redirect()->route('portal.permission.index');
    }
}
