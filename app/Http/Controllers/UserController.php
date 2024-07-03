<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('administrator', compact('users'));
    }

    public function store(Request $request)
    {
        $request->validate([

            'type' => 'required|string',
            'identification' => 'required|integer',
            'name' => 'required|string',
            'post' => 'required|string',
            'phone_number' => 'required|string',
            'usuario' => 'required|string',
            'state' => 'required|string',
        ]);

        // Crear la contraseña utilizando la identificación y encriptarla
        $password = Hash::make($request->identification);

        User::create([
            'type' => $request->type,
            'identification' => $request->identification,
            'name' => $request->name,
            'post' => $request->post,
            'phone_number' => $request->phone_number,
            'usuario' => $request->usuario,
            'state' => $request->state,
            'password' => $password,
        ]);

        // User::create($request->all());
        return response()->json(['success' => 'Usuario creado con éxito']);

        // return redirect()->route('administrator');
    }

}
