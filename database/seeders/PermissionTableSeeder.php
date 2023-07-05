<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionTableSeeder extends Seeder
{

    public function run(): void
    {
        $authorities = config('permission.authorities');

        $listPermissions = [];
        $superAdminPermissions = [];
        $adminPermissions = [];
        $contributorPermissions = [];

        foreach ($authorities as $label => $permissions) {

            foreach ($permissions as $permission) {
                $listPermissions[] = [
                    'name' => $permission,
                    'guard_name' => 'web',
                    'created_at' => date('Y-m-d H:m:s'),
                    'updated_at' => date('Y-m-d H:m:s'),
                ];

                // Super Admin
                $superAdminPermissions[] = $permission;

                // Admin
                if (in_array($label, ['manage_posts', 'manage_pages', 'manage_programs', 'manage_galleries'])) {
                    $adminPermissions[] = $permission;
                };

                // Contributor
                if (in_array($label, ['manage_posts', 'manage_galleries'])) {
                    $contributorPermissions[] = $permission;
                };
            }
        }

        // Insert Permissions
        Permission::insert($listPermissions);

        // Insert Role
        $superAdmin = Role::create([
            'name' => 'SuperAdmin',
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        $admin = Role::create([
            'name' => 'Admin',
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        $contributor = Role::create([
            'name' => 'Contributor',
            'guard_name' => 'web',
            'created_at' => date('Y-m-d H:m:s'),
            'updated_at' => date('Y-m-d H:m:s'),
        ]);

        // Role -> Permission
        $superAdmin->givePermissionTo($superAdminPermissions);
        $admin->givePermissionTo($adminPermissions);
        $contributor->givePermissionTo($contributorPermissions);

        $userSuperAdmin = User::find(1)->assignRole('SuperAdmin');
    }
}
