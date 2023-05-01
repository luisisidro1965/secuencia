<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evalua;
use App\Models\Question;
use Illuminate\Support\Facades\Auth;
use Faker\Guesser\Name;

//use Illuminate\Support\Facades\Auth;

class EvaluaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $questions = Question::query()
            ->select(['nombre', 'periodo', 'inicia_en', 'termina_en', 'total', 'progedu', 'Matricula'])
            ->where('progedu', '=', Auth::user()->progedu)
            ->paginate(15);
        return view("coordi.question.index", compact("questions"));

        /*
        $quiestions = E
        if (Evalua::find(auth()->user()->id)) {
            return "Ya resolvio la encuesta";
        }
        //echo $userActual->rol . '   ' . $userActual->name;
        return view('evalua.pit');
        */
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $userActual = auth()->user();

        $evalua = new Evalua();

        $evalua->tutorado_id = $userActual->id;
        $evalua->fecha_llenado = now();
        $evalua->resp01 = $request->resp1;
        $evalua->resp02 = $request->resp2;
        $evalua->resp03 = $request->resp3;
        $evalua->resp04 = $request->resp4;
        $evalua->resp05 = $request->resp5;
        $evalua->resp06 = $request->resp6;
        $evalua->resp07 = $request->resp7;
        $evalua->resp08 = $request->resp8;
        $evalua->resp09 = $request->resp9;
        $evalua->resp10 = $request->resp10;
        $evalua->resp11 = $request->resp11;
        $evalua->resp12 = $request->resp12;
        $evalua->resp13 = $request->resp13;
        $evalua->resp14 = $request->resp14;
        $evalua->resp15 = $request->resp15;
        $evalua->resp16 = $request->resp16;
        $evalua->resp17 = $request->resp17;

        $evalua->save();

        return redirect('/evalua');
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
