@extends('layouts.app')
@section('css')

        <link rel="stylesheet" href="{{ asset('css/login.css') }}">

@endsection

@section('content')
    <div class="container">
        <form id="signup">
            <div class="header">
                <h3>Bienvenido</h3>
            </div>
            <div class="sep"></div>
            <div class="inputs">
                <input type="email" placeholder="e-mail" autofocus />
                <input type="password" placeholder="Password" />
                <div class="checkboxy">
                    <input name="cecky" id="checky" value="1" type="checkbox" />
                    <label class="terms">Acepto los terminos de uso</label>
                </div>
                <a id="submit" href="#">Ingrese como invitado</a>
            </div>
        </form>
    </div>
@endsection
