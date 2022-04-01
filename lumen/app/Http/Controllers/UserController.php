<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\User;
use App\Http\Controllers\ApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends AuthApiController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct(User::class, 'id', Auth::user()->id);
    }

    use authUpdate;

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $user = User::where('email', $request->input('email'))->first();
        if (Hash::check($request->input('password'), $user->password)) {
            $apikey = base64_encode(Str::random(40));
            User::where('email', $request->input('email'))->update(['api_key' => "$apikey"]);;
            return response()->json(['status' => 'success', 'api_key' => $apikey]);
        } else {
            return response()->json(['status' => 'fail'], 401);
        }
    }

    //
}
