@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{ route('areas.create') }}" class="btn btn-primary">Crear area</a>
        <table class="table table-bordered table-hover">
            <thead>
                <th>id</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Edit</th>
                <th>Delete</th>
            </thead>
            <tbody>
                @foreach ($areas as $area)
                    <tr>
                        <td>{{ $area->id }}</td>
                        <td>{{ $area->nombre }}</td>
                        <td>{{ $area->descripcion }}</td>
                        <td>
                            <a href="{{ route('areas.show', $area->id) }}" class="btn btn-primary">Edit</a>
                        </td>
                        <td><a href="{{ route('areas.create') }}" class="btn btn-danger">Del</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
