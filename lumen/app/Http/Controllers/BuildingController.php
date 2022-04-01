<?php

namespace App\Http\Controllers;

use App\Models\Building;

class BuildingController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(Building::class);
    }

    //
}
