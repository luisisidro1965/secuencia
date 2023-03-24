<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SubirarchivoController extends Controller
{
    
    public function areacir()
    {
        $radio =12;
        $ac = pi()*pow($radio, 2);
        echo "El area del circulo es " . $ac;
    }

    public function mensaje()
    {
        echo "Hi, good morning!!!";
    }

}
