<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ParalelogramoController extends Controller
{
    public function lado()
    {
        //return $_POST;
        $a = $_POST['lado1'];
        $b = $_POST['lado2'];
        $A = $_POST['angulo'];

        $r = sqrt(pow($a,2)+pow($b,2)+2*$a*$b*cos($A));

        return view('coordi.ejercicio.paralelogramo', ['r' => $r]);

    }
}
