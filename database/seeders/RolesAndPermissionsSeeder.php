<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\PermissionRegistrar;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();
        
        //Permissions
        $mprms = [
            'users' => ['create', 'read', 'update', 'delete'],
        ];
        foreach($mprms as $model => $permissions) {
            foreach($permissions as $permission) {
                Permission::create(['name' => $model.'.'.$permission]);
            }
        }
        
        //Roles
        $roles = ['admin', 'shopkeeper', 'customer'];
        foreach($roles as $role) {
            $mrole = Role::create(['name' => $role]);
            if($role === 'admin') {
                $mrole->givePermissionTo(Permission::all());
            }
        }
    }
}
