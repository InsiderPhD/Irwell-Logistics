<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role = new Role();
        $role->name = "System Admin";
        $role->save();

        $role = new Role();
        $role->name = "Manager";
        $role->save();

        $role = new Role();
        $role->name = "Worker";
        $role->save();

        $role = new Role();
        $role->name = "Driver";
        $role->save();
    }
}
