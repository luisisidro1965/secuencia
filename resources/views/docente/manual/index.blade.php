@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manuales de práctica</h1>

        {{-- <form action="{{ route('manuales.create') }}" method="get">
            @csrf
            <button type="submit" class="btn btn-primary">Crear Manual</button>
        </form> --}}

        <a href="{{ route('manuales.create') }}" class="btn btn-primary mb-2">Crear manual</a>

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
                        <td>
                            <a href="{{ route('manuales.edit', $manual->id) }}" class="btn btn-primary">Edit</a>
                        </td>

                        <td>
                            {{-- <a href="{{ route('manuales.destroy', $manual->id) }}" class="btn btn-danger">Del</a> --}}

                            <form action="{{ route('manuales.destroy', $manual->id) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Del</button>
                            </form>
                            
                        </td>

                        <td>
                            <a href="{{ route('manuales.show', $manual->id) }}" class="btn btn-info">Info</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
