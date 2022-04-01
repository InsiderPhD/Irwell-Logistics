<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            $location = new Location();
            $location->name = "SHELF_" . $i . "_CHURCH_END";
            $location->input = "package";
            $location->output = "package";
            $location->shape = "shelf";
            $location->description = "Stores packages";
            $location->building()->associate(Building::where("number" , "=", 1)->first());

            $location->save();
        }

        for ($i = 0; $i < 10; $i++) {
            $location = new Location();
            $location->name = "SHELF_" . $i . "_ORCHARD_SIDE";
            $location->input = "package";
            $location->output = "package";
            $location->shape = "shelf";
            $location->description = "Stores packages";
            $location->building()->associate(Building::where("number" , "=", 4)->first());
            $location->save();
        }

        $location = new Location();
        $location->name = "SEAWAYS";
        $location->input = "package";
        $location->output = "labelled package";
        $location->shape = "U";
        $location->description = "Labels packages";
        $location->building()->associate(Building::where("number" , "=", 2)->first());
        $location->save();

        $location = new Location();
        $location->name = "MEADOW_SHELF";
        $location->input = "package";
        $location->output = "";
        $location->shape = "shelf";
        $location->description = "Labels packages";
        $location->building()->associate(Building::where("number" , "=", 5)->first());
        $location->save();

        $location = new Location();
        $location->name = "MEADOW_VAN_LOADER";
        $location->input = "package";
        $location->output = "";
        $location->shape = "I";
        $location->description = "Loads vans";
        $location->building()->associate(Building::where("number" , "=", 5)->first());
        $location->save();

        $location = new Location();
        $location->name = "HR";
        $location->input = "";
        $location->output = "";
        $location->shape = "";
        $location->description = "HR Department";
        $location->building()->associate(Building::where("number" , "=", 3)->first());
        $location->save();

        $location = new Location();
        $location->name = "IT";
        $location->input = "";
        $location->output = "";
        $location->shape = "";
        $location->description = "IT Department";
        $location->building()->associate(Building::where("number" , "=", 3)->first());
        $location->save();
    }
}
