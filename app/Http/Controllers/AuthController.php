<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function callback()
    {
        $userFromGoogle = Socialite::driver('google')->stateless()->user();

        $userFromDB = User::where('google_id', $userFromGoogle->getId())->first();

        if(!$userFromDB){
            $userFromDB = new User();
            $userFromDB->email = $userFromGoogle->getEmail();
            $userFromDB->google_id = $userFromGoogle->getId();
            $userFromDB->name = $userFromGoogle->getName();

            $userFromDB->save();

            auth('web')->login($userFromDB);
            session()->regenerate();
            return redirect('/');

        }
    }

    public function logout(Request $request)
    {
        auth('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
