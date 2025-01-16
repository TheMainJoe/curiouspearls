<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'tenant-list',
            'tenant-create',
            'tenant-edit',
            'tenant-delete',
            'subscription-list',
            'subscription-create',
            'subscription-edit',
            'subscription-delete',
            'client-list',
            'client-create',
            'client-edit',
            'client-delete',
            'module-list',
            'module-create',
            'module-edit',
            'module-delete',
         ];
         
         foreach ($permissions as $permission) {
              Permission::create(['name' => $permission]);
         }
    }
}
