<?php

namespace App\Http\Controllers;

use App\Models\Machine;

class MachineController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(Machine::class);
    }

    //
}
