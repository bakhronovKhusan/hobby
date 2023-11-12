<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolePermisionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles           = config('products.roles');
        $permissions     = config('products.permissions');
        $rolePermissions = config('products.rolePermissions');
        $Roles = [];
        foreach ($roles as $role) {
            $Roles[$role] = Role::create(['name' => $role]);
        }
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }

        foreach ($rolePermissions as $key => $rolePermission) {
            foreach ($rolePermission as $permission){
                $Roles[$key]->givePermissionTo($permission);
            }
        }
        User::find(1)->assignRole('admin');
        User::find(2)->assignRole('user');
    }
}
