<?php

namespace App\Http\Controllers;

use App\Models\User; // Asegúrate de importar el modelo User
use Illuminate\Http\Request;

class LoginController extends Controller
{
    // Mostrar el formulario de login
    public function showLoginForm()
    {
        return view('auth.login'); // Asegúrate de que la vista esté en 'resources/views/auth/login.blade.php'
    }

    // Procesar el login
    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        // Aquí iría la lógica de autenticación

        return redirect()->route('home')->with('success', '¡Bienvenido!');
    }

    // Mostrar el formulario de registro
    public function showRegisterForm()
    {
        return view('auth.register'); // Vista para el registro de usuario
    }

    // Procesar el registro de un nuevo usuario
    public function register(Request $request)
    {
        $request->validate([
            'username' => 'required|unique:users,name',
            'password' => 'required|min:6',
        ]);

        // Crear nuevo usuario
        User::create([
            'username' => $request->name,
            'password' => $request->password, // Asegúrate de no encriptar
        ]);

        return redirect()->route('login')->with('success', 'Usuario registrado con éxito. Ahora puedes iniciar sesión.');
    }
}
