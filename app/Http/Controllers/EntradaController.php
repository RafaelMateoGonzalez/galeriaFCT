<?php

namespace App\Http\Controllers;


use App\Models\Entrada;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;

class EntradaController extends Controller
{



    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

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


    public function store(Request $request)
    {
        // Dump and die para depurar los datos recibidos
        dd($request->all());

        // Validar los datos del formulario
        $request->validate([
            'numeroTarjeta' => 'required|numeric',
            'cvv' => 'required|digits:3',
            'fechaExpiracion' => 'required|date|after:today',
            'evento_id' => 'required|integer',
            'cantidad' => 'required|integer|min:1',
        ]);

        // Crear una nueva entrada
        $entrada = new Entrada();
        $entrada->evento_id = $request->input('evento_id');
        $entrada->user_id = Auth::id();
        $entrada->codigo = strtoupper(uniqid('ENTRADA'));
        $entrada->fecha_compra = now();
        $entrada->cantidad = $request->input('cantidad');
        $entrada->save();

        // Redirigir con un mensaje de éxito
        return redirect()->route('entradas.index')->with('success', 'Entrada comprada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

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
