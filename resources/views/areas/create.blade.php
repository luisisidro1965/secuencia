@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ route('areas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" name="nombre" />
            </div>
            
            <label for="nombre">Descripción</label>
            <input type="text" class="form-control" name="descripcion" />
            <hr>
            <button type="submit" class="btn btn-primary">Enviar Area</button>
        </form>
    </div>
@endsection
