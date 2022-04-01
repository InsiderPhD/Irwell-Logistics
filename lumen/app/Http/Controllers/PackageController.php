<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\Package;

class PackageController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(Package::class);
    }

    //
}
