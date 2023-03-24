<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use App\Models\Area;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Mail;

class AreaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $areas = Area::paginate(6);
        return view('areas.index', compact('areas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('areas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //return $request->file('fotografia');
        $request->validate([
            'fotografia' => 'required|image|max:2048'
        ]);

        $areas = new Area();

        $areas->nombre = $request->nombre;
        $areas->descripcion = $request->descripcion;

        /**
         * Ruta de almacén temporal
         * $areas->fotografia =$request->file('fotografia');
         * Almacena en storage/app/public
         * $areas->fotografia =$request->file('fotografia')->store('');
         * Almacena en storage/app/images  Ahi crea la carpeta images
         * $areas->fotografia =$request->file('fotografia')->store('images');
         * Almacena en storage/app/public/images  En la carpeta public crea images
         * $areas->fotografia =$request->file('fotografia')->store('public/images');
         * Crear acceso directo a la carpeta public/images con php artisan storage/link
         */

        $fotografiaPublic = $request->file('fotografia')->store('public/images');

        $areas->fotografia = Storage::url($fotografiaPublic);

        $areas->save();
        //print_r($request->user());
        Mail::to($request->user())->send(new ContactanosMailable);

        return redirect('areas')->with('info', alert('sfsf', 'qweq'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        /*
        $area = Area::find($id);
        return view('areas.show', ['area' => $area]);
        */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $area = Area::find($id);
        return view('areas.edit', ['area' => $area]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $area = Area::find($id);

        $area->nombre = $request->nombre;
        $area->descripcion = $request->descripcion;

        $area->save();
        Alert::error(session('error'));
        return redirect('areas');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alert::question('Question Title', 'Question Message');

        //Area::destroy($id);


        return redirect("areas")->with('info', 'Que paso');;
    }
}
