<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name' => 'Add Employ']);
        Permission::create(['name' => 'Add Student']);
        Permission::create(['name' => 'Add Parent']);
        Permission::create(['name' => 'Delete']);
        Permission::create(['name' => 'Editor']);
        Permission::create(['name' => 'Restore']);
    }
}
