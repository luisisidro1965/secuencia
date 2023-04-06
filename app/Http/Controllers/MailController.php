<?php

namespace App\Http\Controllers;

use App\Mail\ContactanosMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\TutoMail;

class MailController extends Controller
{
    public function index()
    {
        $mailData = [
            'title' => 'Correo electronico desde el sitio',
            'body' => 'Esta es una prueba para email usando smtp'
        ];

        //Mail::to('luisalfredoisidro@grupo5b.tutoriasutcam.net')->send(new ContactanosMailable(Area $area));

        dd("Email is sent successfully.");
    }
}
