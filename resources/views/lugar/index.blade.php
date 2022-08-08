@extends('layouts.app')

@section('content')
    <div class="container">
        <i class="fa fa-camera-retro fa-lg"></i>
        <h1>Lista de lugares</h1>
        <a href="{{ route('lugar.create') }}" class="btn btn-primary"><i class="fa fa-trash">&nbsp;</i>Crear lugar</a>
  
        <i class="fa fa-book"></i>
        <table class="table table-bordered">
            <thead>
                <th>id</th>
                <th>descripcion</th>
                <th>responsable</th>
                <th>capacidad</th>
                <th>edificio</th>
                <th>Edit</th>
            </thead>
            @foreach ($lugares as $lugar)
                <tr>
                    <td>{{ $lugar->id }}</td>
                    <td>{{ $lugar->descripcion }}</td>
                    <td>{{ $lugar->responsable }}</td>
                    <td>{{ $lugar->capacidad }}</td>
                    <td>{{ $lugar->edificio }}</td>
                    <td><i class="fa fa-pencil" aria-hidden="true"></i></td>
                </tr>
            @endforeach
        </table>
        {{ $lugares->links() }}
    </div>
@endsection
