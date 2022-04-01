<?php

namespace Database\Seeders;

use App\Models\Building;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BuildingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $building=new Building();
        $building->name = "Church End Warehouse";
        $building->description = "Warehouse located on Church End";
        $building->number = 1;
        $building->save();

        $building=new Building();
        $building->name = "Seaways Processing";
        $building->description = "Labels packages";
        $building->number = 2;
        $building->save();

        $building=new Building();
        $building->name = "Grey House";
        $building->description = "Front office and reception, visitors should report here";
        $building->number = 3;
        $building->save();

        $building=new Building();
        $building->name = "Orchardside Warehouse";
        $building->description = "Warehouse located on Orchardside";
        $building->number = 4;
        $building->save();

        $building=new Building();
        $building->name = "Meadowside";
        $building->description = "Loads packages onto vans";
        $building->number = 5;
        $building->save();

        $building=new Building();
        $building->name = "Badger's House";
        $building->description = "Van port";
        $building->number = 6;
        $building->save();
    }
}
