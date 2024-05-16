<?php

namespace App\Http\Controllers;


use App\Models\Entrada;
use App\Models\User;
use Endroid\QrCode\QrCode;
use Endroid\QrCode\Writer\PngWriter;
use Barryvdh\DomPDF\PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;


class EntradaController extends Controller
{

    public function misEntradas(User $user)
    {
        $entradas = Entrada::where('user_id', $user->id)->with('evento')->get();



        return view('misEntradas', compact('user', 'entradas'));
    }



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
        // Validar los datos del formulario
        $request->validate([
            'numeroTarjeta' => 'required|numeric',
            'cvv' => 'required|digits:3',
            'fechaExpiracion' => 'required|date|after:today',
            'evento_id' => 'required|integer',
        ]);

        // Obtener el ID del usuario autenticado
        $user_id = auth()->id();

        if (!$user_id) {
            return redirect()->route('login')->withErrors('Debe iniciar sesión para comprar una entrada.');
        }

        // Generar un código único para el QR
        $codigo = strtoupper(uniqid('ENTRADA'));

        // Crear una nueva entrada
        $entrada = new Entrada();
        $entrada->evento_id = $request->input('evento_id');
        $entrada->user_id = $user_id;
        $entrada->codigo = $codigo;
        $entrada->fecha_compra = now();
        $entrada->cantidad = 1; // Establecer la cantidad en 1
        $entrada->save();

        // Generar el QR code
        $qrCode = new QrCode($codigo);
        $writer = new PngWriter();
        $qrCodeImage = $writer->write($qrCode)->getString();

        // Guardar el QR code en un archivo
        $filePath = 'qrcodes/' . $codigo . '.png';
        Storage::disk('public')->put($filePath, $qrCodeImage);

        // Redirigir con un mensaje de éxito
        return redirect('/')->with('success', 'Entrada creada exitosamente!');
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
