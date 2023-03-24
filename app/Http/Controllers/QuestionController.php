<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::query()
            ->select(['id', 'nombre', 'fecha_creación', 'periodo', 'inicia_en', 'termina_en', 'total', 'progedu', 'Matricula'])
            ->where('progedu', '=', Auth::user()->progedu)
            ->paginate(15);
        return view("coordi.question.index", compact("questions"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("coordi.question.create");
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
                'fecha_creación' => 'required',
                'periodo' => 'required',
                'inicia_en' => 'required',
                'termina_en' => 'required',
                'total' => 'required',
                'progedu' => 'required',
                'Matricula' => 'required'
            ]
        );

        $question = new Question;

        $question->nombre = $request->nombre;
        $question->fecha_creación = $request->fecha_creación;
        $question->periodo = $request->periodo;
        $question->inicia_en = $request->inicia_en;
        $question->termina_en = $request->termina_en;
        $question->total = $request->total;
        $question->progedu = $request->progedu;
        $question->Matricula = $request->Matricula;

        $question->save();

        return redirect()->route("questions.index");
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Question::destroy($id);
        return redirect()->route("questions.index");
    }
}
