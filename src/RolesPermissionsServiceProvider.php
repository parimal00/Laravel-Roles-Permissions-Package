<?php

namespace dude\RolesPermissions;

class RolesPermissionsServiceProvider extends \Illuminate\Support\ServiceProvider
{
    public function boot(){
        $this->loadMigrationsFrom(__DIR__.'/migrations');
    }

    public function register()
    {

    }
}
