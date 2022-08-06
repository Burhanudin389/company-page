<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $adminRole = Role::create([
            'name' => 'admin',
            'guard_name' => 'web'
        ]);
        
        $adminPermission = [
            'admin create',
            'admin read',
            'admin update',
            'admin delete'
        ];
        
        foreach ($adminPermission as $key => $aPermission) {
            Permission::create([
                'name' => $aPermission,
                'guard_name' => 'web'
            ]);

            $adminRole->givePermissionTo($aPermission);
        }

        $employeeRole = Role::create([
            'name' => 'employee',
            'guard_name' => 'web'
        ]);

        $employeePermission = [
            'employee create',
            'employee read',
            'employee update',
            'employee delete'
        ];

        foreach ($employeePermission as $key => $ePermission) {
            Permission::create([
                'name' => $ePermission,
                'guard_name' => 'web'
            ]);

            $employeeRole->givePermissionTo($ePermission);
        }

        $guestRole = Role::create([
            'name' => 'guest',
            'guard_name' => 'web'
        ]);

        $guestPermission = [
            'guest create',
            'guest read',
            'guest update',
            'guest delete'
        ];

        foreach ($guestPermission as $key => $gPermission) {
            Permission::create([
                'name' => $gPermission,
                'guard_name' => 'web'
            ]);

            $guestRole->givePermissionTo($gPermission);
        }
    }
}
