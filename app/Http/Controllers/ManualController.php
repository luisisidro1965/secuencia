<?php

namespace App\Http\Controllers;

use App\Models\Manual;
use Illuminate\Http\Request;

class ManualController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $manuales = Manual::all();

        return view('docente.manual.index', compact('manuales'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('docente.manual.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $manual = new Manual();
        $manual->nombre = $request->nombre;
        $manual->autor = $request->autor;
        $manual->numprac = $request->numprac;

        $manual->save();

        return redirect()->route("manuales.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $manual = Manual::find($id);
        return view('docente.manual.show', compact('manual'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $manual = Manual::find($id);
        return view('docente.manual.edit', compact ('manual'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //$manual = new Manual();
        $manual = Manual::find($id);

        $manual->nombre = $request->nombre;
        $manual->autor = $request->autor;
        $manual->numprac = $request->numprac;

        $manual->save();

        return redirect()->route("manuales.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // return "Recurso a borrar $id";

        // Manual::destroy($id);

        $manual = Manual::find($id);
        $manual->delete();


        return redirect()->route("manuales.index");
    }
}
