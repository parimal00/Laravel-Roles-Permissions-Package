<?php

namespace dude\RolesPermissions\traits;

use dude\RolesPermissions\Models\Permission;

trait HasPermissions
{
    public function givePermission(Permission $permission)
    {
        $this->permissions()->syncWithoutDetaching([$permission->id]);
    }

    public function revokePermission(Permission $permission)
    {
        $this->permissions()->detach($permission);
    }
}
