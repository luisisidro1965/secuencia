@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manuales de práctica</h1>

        {{-- <form action="{{ route('manuales.create') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary">Crear Manual</button>
        </form> --}}

        <a href="{{ route('manuales.create') }}" class="btn btn-primary mb-2" >Crear manual</a>

        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
                <th>Autor</th>
                <th>Num Practicas</th>
                <th>Editar</th>
                <th>Eliminar</th>
                <th>Show</th>
            </thead>
            <tbody>
                @foreach ($manuales as $manual)
                    <tr>
                        <td>{{ $manual->id }}</td>
                        <td>{{ $manual->nombre }}</td>
                        <td>{{ $manual->autor }}</td>
                        <td>{{ $manual->numprac }}</td>
                        <td><button type="submit" class="btn btn-primary">Edit</button></td>
                        <td><button type="submit" class="btn btn-danger">Del</button></td>
                        <td>
                            {{-- <form action="{{ route('manuales.show', $manual->id) }}" method="get">
                                <button type="submit" class="btn btn-info">Show</button>
                            </form> --}}

                            <a href="{{ route('manuales.show', $manual->id) }}" class="btn btn-info">Show</a>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
