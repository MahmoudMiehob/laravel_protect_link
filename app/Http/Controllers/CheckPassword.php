<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class CheckPassword extends Controller
{
    public function createpassword()
    {

        return view('create_pass');
    }

    public function updatepassword(Request $request)
    {

        $password_env = env('PASSWORD_ROUTE');

        if ($password_env == $request->password) {

            $user = User::find(auth()->user()->id);
            $user->update([
                'password_route' => true,
            ]);

            return redirect()->route('dashboard');

        } else {
            return abort(404);
        }
    }

}
