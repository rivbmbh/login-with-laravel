<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function sign_in()
    {
        return view('sign.login');
    }

    public function sign_up()
    {
        return view('sign.register');
    }

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleGoogleCallback()
    {
        try {
            $googleUser = Socialite::driver('google')->stateless()->user();

            $user = User::updateOrCreate(
                ['google_id' => $googleUser->id],
                [
                    'name' => $googleUser->name,
                    'email' => $googleUser->email,
                    'password' => null, // Tidak diperlukan karena login dengan Google
                ]
            );

            Auth::login($user);

            return redirect()->route('home'); // Ganti dengan route tujuan setelah login
        } catch (\Exception $e) {
            return redirect()->route('sign_in')->with('error', 'Terjadi kesalahan saat login.');
        }
    }

    // public function redirect()
    // {
    //     return Socialite::driver('google')->redirect();
    // }

    // public function callback()
    // {
    //     $userFromGoogle = Socialite::driver('google')->stateless()->user();
        
    //     $userFromDB = User::where('google_id', $userFromGoogle->getId())->first();

    //     if(!$userFromDB){
    //         $userFromDB = new User();
    //         $userFromDB->email = $userFromGoogle->getEmail();
    //         $userFromDB->google_id = $userFromGoogle->getId();
    //         $userFromDB->name = $userFromGoogle->getName();

    //         $userFromDB->save();

    //         auth('web')->login($userFromDB);
    //         session()->regenerate();
    //         return redirect()->route('home');

    //     }
    // }

    public function sign_out(Request $request)
    {
        Alert::success('Success', 'Anda berhasil logout!');
        auth('web')->logout(); // Logout pengguna dari sesi saat ini
        $request->session()->invalidate(); // Menghapus semua data sesi
        $request->session()->regenerateToken(); // Membuat ulang CSRF token untuk keamanan
        return redirect()->route('sign_in'); // Mengarahkan pengguna ke halaman login
    }
    
}
