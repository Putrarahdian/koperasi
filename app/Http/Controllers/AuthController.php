<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
    return view('auth.login');
    }
    public function login(Request $request){
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
        if(Auth::attempt($data)) {
            $request->session()->regenerate();

            $user = Auth::user();
            if($user->role === "admin" || $user->role === "bendahara"){
                return redirect()->intended('anggotas');
            } else {
                Auth::logout();
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return back()->withErrors([
                    'email' => 'Role anda tidak memiliki akses ke sistem ini'
                ])->OnlyInput('email');
            }
        }
        return back()->withErrors([
            'email' => 'Email atau password salah.'
        ])->onlyInput('email');
    }

    public function logout(Request $request)
    {
        Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('/');
    }
}
