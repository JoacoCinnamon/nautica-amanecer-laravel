<?php

namespace App\Http\Controllers;

use App\Models\Amarra;
use Illuminate\Http\Request;

class AmarraController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $amarras = Amarra::withTrashed()->paginate(18);
        return view('amarras.index', compact('amarras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('amarras.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $data = $request->validate([
            "pasillo" => "required|numeric|min:1"
        ]);
        // Por defecto 0 porque es una amarra nueva
        $data["estado"] = 0;

        $amarra = Amarra::create($data);

        return redirect()->route('amarras.index')->with('alert', [
            'message' => "Amarra $amarra->id guardada con éxito",
            'type' => 'success',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Amarra  $amarra
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $amarra = Amarra::withTrashed()->findOrFail($id);
        $previous = Amarra::previous($amarra->id);
        $next = Amarra::next($amarra->id);
        return view('amarras.show', compact(['amarra', 'next', 'previous']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Amarra  $amarra
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $amarra = Amarra::withTrashed()->findOrFail($id);

        if (!is_null($amarra->deleted_at)) {
            return redirect()->route('amarras.index')->with('alert', [
                'message' => "No se puede editar una Amarra no activa",
                'type' => 'warning',
            ]);
        }
        return view('amarras.edit', compact('amarra'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Amarra  $amarra
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Amarra $amarra) {
        $data = $request->validate([
            "pasillo" => "required|numeric|min:1"
        ]);

        $amarra->update($data);

        return redirect()->route('amarras.index')->with('alert', [
            'message' => "Amarra $amarra->id editada con éxito",
            'type' => 'success',
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Amarra  $amarra
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $amarra = Amarra::withTrashed()->findOrFail($id);

        // Falta validar si está siendo ocupada o no por alguna embarcación

        if (!is_null($amarra->deleted_at)) {
            $amarra->restore();
            return redirect()->route('amarras.index')->with('alert', [
                'message' => "Amarra $amarra->id restablecida con éxito",
                'type' => 'success',
            ]);
        }

        $amarra->delete();

        return redirect()->route('amarras.index')->with('alert', [
            'message' => "Amarra $amarra->id borrada con éxito",
            'type' => 'success',
        ]);
    }
}
