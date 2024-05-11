<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class EventoController extends Controller
{

    public function crear(Request $request)
    {
        Log::info('Iniciando la creación de un evento con datos:', $request->all());

        $validated = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'fecha_evento' => 'required|date',
            'precio_entrada' => 'required|numeric',
            'foto' => 'required|image'
        ]);

        Log::info('Datos validados:', $validated);

        $eventoData = [
            'user_id' => auth()->id(),
            'titulo' => $request->titulo,
            'descripcion' => $request->descripcion,
            'fecha_evento' => $request->fecha_evento,
            'precio_entrada' => $request->precio_entrada,
            'foto' => $request->file('foto')->store('fotos', 'public')
        ];

        Log::info('Intentando crear el evento con:', $eventoData);

        $evento = Evento::create($eventoData);

        if ($evento) {
            Log::info('Evento creado exitosamente', ['evento_id' => $evento->id]);
            return redirect('/')->with('success', 'Evento creado exitosamente!');
        } else {
            Log::error('No se pudo crear el evento');
            return back()->withErrors(['msg' => 'No se pudo crear el evento.']);
        }
    }



    /**
     * Display a listing of the resource.
     */
    public function show()

    {
        $eventos = Evento::orderBy('fecha_evento', 'desc')->paginate(5); // Cambia 5 por cualquier otro número según cuántos eventos por página quieras mostrar
        return view('index', ['eventos' => $eventos]);
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
        //
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
