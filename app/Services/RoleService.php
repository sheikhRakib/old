<?php

namespace App\Services;

use Spatie\Permission\Models\Role;

class RoleService
{
    public function storeRole(Role $role, array $input)
    {
        $role->name = $input['name'];
        $role->displayname = $input['displayname'];
        $role->description = $input['description'];
        $role->save();
    }

    public function updateRole(Role $role, array $input)
    {
        $role->displayname = $input['displayname'];
        $role->description = $input['description'];
        $role->save();
    }

    public function deleteRole(Role $role)
    {
        $role->delete();
    }
}
