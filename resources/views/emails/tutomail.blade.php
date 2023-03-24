@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>{{ $mailData['title'] }}</h1>
        <p>{{ $mailData['body'] }}</p>

        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum provident animi inventore voluptate incidunt quasi
        temporibus sed laborum impedit excepturi vitae qui, nisi modi cum consequatur. Unde consectetur vero blanditiis?Quae
        modi, voluptas sequi necessitatibus natus repellendus laborum cupiditate unde minima. Veritatis non tenetur possimus
        officia tempora maiores perspiciatis debitis necessitatibus. Laboriosam quaerat unde cumque recusandae officiis ea
        minus voluptate.

        <h2>Formulario de contacto</h2>
        <form action={{ route('contact') }} method="POST">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Nombre</label>
                <input name="name" type="text">
            </div>
            <div class="form-group">
                <label for="name">Mensaje</label>
                <input name="msg" type="text">
            </div>
            <div class="form-group">
                <button type="submit" id='btn-contact' class="btn">Enviar</button>
            </div>
        </form>

    </div>
@endsection
