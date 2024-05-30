<?php

namespace App\Http\Controllers;

use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

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
        $eventos = Evento::orderBy('fecha_evento', 'desc')->paginate(4); // Cambia 5 por cualquier otro número según cuántos eventos por página quieras mostrar
        return view('index', ['eventos' => $eventos]);
    }



    public function destroy($id)
    {
        $evento = Evento::findOrFail($id);
        $evento->delete();
        return redirect('/')->with('success', 'Usuario creado exitosamente!');

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
    public function edit($id)
    {
        $evento = Evento::findOrFail($id);
        return view('modificarEvento', compact('evento'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'event_name' => 'required|string|max:255',
            'event_date' => 'required|date',
            'event_description' => 'required|string',
            'event_price' => 'required|numeric', // Validación para el precio
            'event_image' => 'nullable|image|max:2048', // Validación para la imagen
        ]);

        $evento = Evento::findOrFail($id);
        $evento->titulo = $request->input('event_name');
        $evento->fecha_evento = $request->input('event_date');
        $evento->descripcion = $request->input('event_description');
        $evento->precio_entrada = $request->input('event_price'); // Actualizar el precio

        // Manejar la subida de la imagen solo si hay una nueva imagen
        if ($request->hasFile('event_image')) {
            // Borrar la imagen anterior si existe
            if ($evento->foto) {
                Storage::delete('public/' . $evento->foto);
            }

            // Subir la nueva imagen
            $path = $request->file('event_image')->store('eventos', 'public');
            $evento->foto = $path;
        }

        $evento->save();

        return redirect('/')->with('success', 'Evento creado exitosamente!');
    }

    /**
     * Remove the specified resource from storage.
     */

}
