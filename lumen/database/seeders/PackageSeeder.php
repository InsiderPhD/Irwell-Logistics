<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Location;
use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $providers = array(
            'Royal Mail',
            'DPD',
            'FEDEX',
            'Whistl',
            );

        for ($i = 0; $i < 100; $i++)
        {
            $package = new Package();
            $package->address = $faker->address;
            $package->provider = $providers[array_rand($providers)];
            $package->delivery_id = rand(0,20);
            $package->contents_id = $faker->uuid;
            $package->save();
        }
        for ($i = 0; $i < 100; $i++)
        {
            $package = new Package();
            $package->address = $faker->address;
            $package->provider = $providers[array_rand($providers)];
            $package->delivery_id = 0;
            $package->contents_id = $faker->uuid;
            $package->save();
        }
    }
}
