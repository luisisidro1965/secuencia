<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Unidad;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AsignaturaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return "Hola Index";
        //$asignaturas = Asignatura::all();
        //$asignaturas = Asignatura::paginate(5);

        //$asignaturas = DB::table('asignaturas')->get();
        //$asignaturas = DB::table('asignaturas')->where('cuatrimestre', 1)->get();

        //$asignaturas = DB::table('asignaturas')
        //    ->select('id', 'nombre', 'objetivo', 'cuatrimestre', 'ht', 'hp', 'htotales', 'htsemana')
        //    ->get();
        $asignaturas = Asignatura::query()
            ->select(['id', 'nombre', 'objetivo', 'cuatrimestre', 'ht', 'hp', 'htotales', 'htsemana'])
            ->paginate(15);
        return view("asignatura.index", compact("asignaturas"));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categorias = DB::table('progedu')
            ->select('id', 'nombre')
            ->get();
        return view("asignatura.create", compact("categorias"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //return $request;

        $validar = $request->validate(
            [
                'nombre' => 'required|max:100',
                'cuatrimestre' => 'required|numeric',
                'ht' => 'required|numeric',
                'hp' => 'required|numeric',
                'htotales' => 'required|numeric',
                'hweek' => 'required|numeric',
                'goal' => 'required'
            ]
        );

        //dd($request);
        //return $request;
        $asignatura = new Asignatura;

        $asignatura->nombre = $request->nombre;
        $asignatura->cuatrimestre = $request->cuatrimestre;
        $asignatura->ht = $request->ht;
        $asignatura->hp = $request->hp;
        $asignatura->htotales = $request->htotales;
        $asignatura->htsemana = $request->hweek;
        $asignatura->objetivo = $request->goal;
        $asignatura->progedu_id = $request->categoria;

        $asignatura->save();

        return redirect()->route("asignatura.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $asignatura = Asignatura::find($id);
        return view('asignatura.edit', ['asignatura' => $asignatura]);
        //return view('asignatura.edit', compact('asignatura'));
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
        //return $request;
        $asignatura = Asignatura::find($id);

        $asignatura->nombre = $request->nombre;
        $asignatura->cuatrimestre = $request->cuatrimestre;
        $asignatura->ht = $request->ht;
        $asignatura->hp = $request->hp;
        $asignatura->htotales = $request->htotales;
        $asignatura->htsemana = $request->hweek;
        $asignatura->objetivo = $request->goal;

        $asignatura->save();

        return redirect()->route("asignatura.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //return $id;
        //$asignaturaActual = Asignatura::find($id);
        Asignatura::destroy($id);
        return redirect()->route("asignatura.index");
    }

    public function unidades($id)
    {
        $asignatura = Asignatura::find($id);

        $unidades = Unidad::query()
        ->select(['id', 'nombre', 'objetivo', 'horas_t', 'horas_p', 'fecha_entrega'])
        ->where('asignatura_id','=', $asignatura->id)
        ->get();

        return view('asignatura.unidades', ['asignatura' => $asignatura, 'unidades' => $unidades]);
    }
}
