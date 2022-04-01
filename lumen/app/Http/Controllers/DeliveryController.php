<?php

namespace App\Http\Controllers;

use App\Models\Delivery;

class DeliveryController extends ApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(Delivery::class);
    }

    //
}
