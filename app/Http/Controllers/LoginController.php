<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function register(Request $request){

        /* Reglas de validación */

        $request->validate([
            'email' => 'required|unique:users',
            'password' => 'required|min:4',
            'name' => 'required',
            'num_piso', 'num_apto'  => 'required',
            /* 'num_apto' => 'required|unique:users' */
        ]);

        /* creando usuario en la base de datos */

        $user = new User();

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->apellido = $request->apellido;
        $user->num_apto = $request->num_apto;
        $user->num_piso = $request->num_piso;

        $user->save();

        Auth::login($user);

       /* redireccionando al usuario a la pagina privada, junto a un mensaje de inicio de sesion */

        return redirect(route('privada'))->with('info', 'Usuario registrado exitosamente');

    }

    public function login(Request $request){

        /* validando el intento de inicio de sesion del usuario */

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = [
            "email" => $request->email,
            "password" => $request->password,
            //"active" = true
        ];
        $remember = ($request->has('remember') ? true : false);

        /* condicional if, donde si el inicio de sesion es exitoso, redirecciona al usuario a la pagina privada, y en caso contrario arroja un error al usuario */

        if(Auth::attempt($credentials,$remember)){
            $request->session()->regenerate();

            return redirect()->intended(route('privada'))->with('info', 'Sesión iniciada con exito');
        }else{
            return redirect('login')->with('info', 'Fallo inicio de sesión, intentelo nuevamente');
        }
    }

    public function logout(Request $request){

        /* realiza el cierre de sesion del usuario, llevandolo de vuelta a la pagina de bienvenida */

        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('welcome'));

    }
}