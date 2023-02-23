<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create Role
        $superAdminRole = Role::create(['name'=>'Super Admin']);
        $adminRole = Role::create(['name'=>'Admin']);
        $editorRole = Role::create(['name'=>'Editor']);
        $userRole = Role::create(['name'=>'User']);

        //Permission list as array
        $permissions = [
            'dashboard',
            //IT Service
            'itservice.view',
            'itservice.create',
            'itservice.edit',
            'itservice.delete',
            //ISP Service
            'ispservice.view',
            'ispservice.create',
            'ispservice.edit',
            'ispservice.delete',
            //IT Order
            'itorder.view',
            'itorder.create',
            'itorder.edit',
            'itorder.delete',
            //ISP Order
            'isporder.view',
            'isporder.create',
            'isporder.edit',
            'isporder.delete',
        ];

        //Create and Assaign Permission
        for($i=0; $i < count($permissions); $i++){
            $permission = Permission::create(['name'=>$permissions[$i]]);
            $superAdminRole->givePermissionTo($permission);
            $permission->assignRole($superAdminRole);
        }
    }
}
