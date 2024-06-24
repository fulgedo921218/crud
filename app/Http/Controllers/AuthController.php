<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\registroRequest; // Importación del Request de validación para registro
use App\Http\Requests\AccesoRequest; // Importación del Request de validación para acceso
use Illuminate\Support\Facades\Hash; // Facade para el hashing de contraseñas
use Illuminate\Validation\ValidationException; // Excepción de validación
use Illuminate\Http\Request; // Clase Request de Laravel
use App\Models\User; // Importación del modelo User

class AuthController extends Controller
{
    // Método para registrar un nuevo usuario
    public function registro(registroRequest $request){
        $user = new User(); // Creación de una nueva instancia de User
        $user->name = $request->name; // Asignación del nombre del usuario desde la solicitud
        $user->email = $request->email; // Asignación del correo electrónico del usuario desde la solicitud
        $user->password = bcrypt($request->password); // Hashing de la contraseña del usuario
        $user->save(); // Guardar el usuario en la base de datos

        // Respuesta JSON con confirmación de éxito
        return response()->json([
            "res" => true,
            "msg" => "Usuario registrado"
        ], 200);
    }

    // Método para manejar el acceso del usuario
    public function acceso(AccesoRequest $request){
        // Buscar el usuario por su correo electrónico
        $user = User::where('email', $request->email)->first();

        // Verificar si el usuario no existe o las credenciales no coinciden
        if (!$user || !Hash::check($request->password, $user->password)) {
            // Respuesta JSON con mensaje de error de credenciales incorrectas
            return response()->json([
                'message' => 'The provided credentials are incorrect.'
            ], 401);
        }

        // Crear un token de acceso para el usuario autenticado
        $token = $user->createToken('auth_token')->plainTextToken;

        // Respuesta JSON con el token de acceso y tipo de token
        return response()->json([
            'access_token' => $token, 
            'token_type' => 'Bearer'
        ], 200);
    }

    // Método para cerrar la sesión del usuario
    public function cerrarSession(Request $request){
        $request->user()->currentAccessToken()->delete(); // Eliminar el token de acceso actual del usuario

        // Respuesta JSON con confirmación de éxito
        return response()->json([
            'res' => true, 
            'msg' => 'Token eliminado'
        ], 200);   
    }
}
