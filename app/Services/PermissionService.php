<?php

namespace App\Services;

use Spatie\Permission\Models\Permission;

class PermissionService
{
    public function updatePermission(Permission $permission, array $input)
    {
        $permission->displayname = $input['displayname'];
        $permission->description = $input['description'];
        $permission->save();
    }
}
