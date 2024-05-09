<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */



    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }


    public function showRegistrationForm()
    {
        return view('register');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'is_admin' => 'sometimes|boolean'
        ]);

        $userData = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
            'is_admin' => $request->has('is_admin') ? true : false,
        ];

        $user = User::create($userData);

        if ($user) {
            return view('index'); }
        else {
            return back()->withErrors(['msg' => 'No se pudo registrar el usuario.']);
        }
    }


    // Método para eliminar una cuenta de usuario

    public function eliminar($id)
    {
        $user = User::findOrFail($id); // Encuentra al usuario por su ID

        // Elimina al usuario
        $user->delete();

        return redirect()->back()->with('success', 'La cuenta del usuario ha sido eliminada exitosamente.');
    }


    // Método para cambiar el tipo de cuenta de usuario
    public function cambiarTipo(Request $request, $id)
    {
        $user = User::findOrFail($id); // Encuentra al usuario por su ID

        // Intenta actualizar y captura errores si los hay
        try {
            // Alternar el estado de is_admin
            $user->is_admin = $user->is_admin ? 0 : 1;
            $user->save();

            return redirect()->back()->with('success', 'El tipo de cuenta del usuario ha sido cambiado exitosamente.');
        } catch (\Exception $e) {
            \Log::error('Error al actualizar el tipo de usuario: ' . $e->getMessage());
            return redirect()->back()->withErrors('Error al cambiar el tipo de cuenta del usuario.');
        }
    }




    public function index()
    {
        $users = User::all(); // Obtiene todos los usuarios de la base de datos return view('users.usuarios', ['users' => $users]);// Envía los usuarios a la vista
        return view('usuarios', ['users' => $users]);
    }
    /**
     * Display the specified resource.
     */



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
