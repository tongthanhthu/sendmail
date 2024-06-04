<?php

namespace App\Http\Controllers;
use App\Events\UserRegistered;
use App\Models\User;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function registered(Request $request)
        {

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

          $hi =  event(new UserRegistered($user));
          dd($hi,$user);

        }
}
