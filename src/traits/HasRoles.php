<?php

namespace dude\RolesPermissions\traits;

use dude\RolesPermissions\Models\Role;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

trait HasRoles
{
    public function roles(): BelongsToMany
    {
        return $this->belongsToMany(Role::class);
    }

    public function hasRole(string $role): bool
    {
        return $this->roles->contains('name', $role);
    }

    public function assignRole(string $role)
    {
        $role = Role::where('name', $role)->firstOrFail();

        return $this->roles()->attach($role);
    }
}
