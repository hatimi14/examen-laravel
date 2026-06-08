<?php

namespace App\Http\Controllers;
use App\Models\Mensaje;
use App\Models\User;

use Illuminate\Http\Request;

class MensajesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }
    public function mensajesEntrada(Request $request)
    {
        //return response()->json(Mensaje::all()->where('destinatario_id', $request->user()->id));
        return response()->json(Mensaje::all());
    }
    public function mensajesSalida(Request $request)
    {
        //return response()->json(Mensaje::all()->where('remitente_id', $request->user()->id));
        return response()->json(Mensaje::all());
    }
    public function mostrarDestinatarios(Request $request)
    {
        return response()->json(User::where('id', '!=', $request->user()->id)->get());
    }

    public function marcarLeido(string $id)
    {
        $mensaje = Mensaje::find($id);

        if (!$mensaje) {
            return response()->json(['message' => 'No encontrado'], 404);
        }
        
        $mensaje->leido = true;
        $mensaje->save();

        return response()->json(['message' => 'Mensaje marcado como leído']);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['destinatario_id' => 'required', 
                            'asunto' => 'required',
                            'mensaje' => 'required']);
        $validated["remitente_id"] = $request->user()->id;
        $validated["leido"] = false;

        Mensaje::create($validated);
        return response()->json(['message' => 'Mensaje enviado correctamente']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $mensaje = Mensaje::find($id);

        if (!$mensaje) {
            return response()->json(['message' => 'No encontrado'], 404);
        }

        return response()->json($mensaje);
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
