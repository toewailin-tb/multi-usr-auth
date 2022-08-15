<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            'agent-list',
            'agent-create',
            'agent-edit',
            'agent-delete',
            'referee-list',
            'referee-create',
            'referee-edit',
            'referee-delete',
            'operation-staff-list',
            'operation-staff-create',
            'operation-staff-edit',
            'operation-staff-delete',
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'permission-list',
            'permission-create',
            'permission-edit',
            'permission-delete',
            'post-list',
            'post-create',
            'post-edit',
            'post-delete'
        ];
        foreach ($data as $permission){
            Permission::create(['name' => $permission]);
        }
    }
}
