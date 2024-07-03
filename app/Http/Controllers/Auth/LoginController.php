<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;


class LoginController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }

    public function showLoginForm()
    {
        return view('welcome');  // Asegúrate de que 'welcome' es tu vista de inicio de sesión
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // Cambié 'email' a 'usuario' para que coincida con el campo del formulario
        if (Auth::attempt($request->only('usuario', 'password'))) {
            return redirect()->intended('/administrador');
        }

        throw ValidationException::withMessages([
            'usuario' => [trans('auth.failed')],
        ]);
    }

    protected function validateLogin(Request $request)
    {
        $request->validate([
            'usuario' => 'required|string',
            'password' => 'required|string',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
