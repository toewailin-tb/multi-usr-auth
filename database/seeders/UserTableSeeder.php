<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'Mg Mg',
            'email' => 'mgmg@test.com',
            'password' => Hash::make('password')
        ]);

        $role = Role::find(1);

        $permission = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permission);

        $user->assignRole([$role->id]);
    }
}
