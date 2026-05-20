<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::firstOrCreate(
            ['name' => 'admin', 'guard_name' => 'web']
        );

        $permissionNames = [
            'index visitors',
            'create visitors',
            'edit visitors',
            'delete visitors',
        ];

        $permissions = collect($permissionNames)->map(
            fn (string $name) => Permission::firstOrCreate(
                ['name' => $name, 'guard_name' => 'web']
            )
        );

        $role->syncPermissions($permissions);

        $user = User::firstOrCreate(
            ['email' => 'tarmizi@tarsoft.com.my'],
            [
                'name' => 'Cikgu Tarmizi',
                'password' => Hash::make('password'),
            ]
        );

        $user->assignRole($role);


        // create a new user with role subadmin that has permission to index visitor only
        $subadmin = User::firstOrCreate(
            ['email' => 'subadmin@tarsoft.com.my'],
            [
                'name' => 'Subadmin',
                'password' => Hash::make('password'),
            ]
        );
        $role = Role::firstOrCreate(
            ['name' => 'subadmin', 'guard_name' => 'web']
        );
        $subadmin->assignRole($role);
        $subadmin->givePermissionTo('index visitors');
    }
}
