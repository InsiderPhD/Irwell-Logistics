<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //$this->call('Database\Seeders\RoleSeeder');
        //$this->call('Database\Seeders\UserSeeder');
        //$this->call('Database\Seeders\BuildingSeeder');
        //$this->call('Database\Seeders\LocationSeeder');
        //$this->call('Database\Seeders\MachineSeeder');
        //$this->call('Database\Seeders\DeliverySeeder');
        $this->call('Database\Seeders\PackageSeeder');
    }
}
