<?php

namespace Database\Seeders;

use App\Models\Building;
use App\Models\Machine;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MachineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++)
        {
            $machine = new Machine();
            $machine->type = "Conveyor";
            $machine->name = "Conveyor";
            $machine->manufacturer = "AS Conveyor Systems";
            $machine->serial_number = "AS Conveyor Systems";
            $machine->support_agreement = false;
            $machine->location_id = 21;
            $machine->save();
        }
        for ($i = 0; $i < 5; $i++)
        {
            $machine = new Machine();
            $machine->type = "Conveyor";
            $machine->name = "Conveyor";
            $machine->manufacturer = "AS Conveyor Systems";
            $machine->serial_number = "AS_con_34534".$i;
            $machine->support_agreement = false;
            $machine->location_id = 22;

            $machine->save();
            $machine = new Machine();
            $machine->type = "Lorry Loader";
            $machine->name = "Lorry Loader";
            $machine->manufacturer = "AS Conveyor Systems";
            $machine->serial_number = "AS_load_34534".$i;
            $machine->support_agreement = false;

            $machine->location_id = 23;
            $machine->save();
        }
    }
}
