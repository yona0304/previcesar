<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    // public function login(Request $request)
    // {
    //     $credentials = $request->only('usuario', 'contrasena');

    //     if (Auth::attempt($credentials)) {
    //         // Autenticación exitosa
    //         return redirect()->intended('/admin');
    //     }

    //     // Autenticación fallida
    //     return back()->withErrors(['usuario' => 'Credenciales incorrectas']);
    // }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
