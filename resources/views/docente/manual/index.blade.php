@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Manuales de práctica</h1>
        <table class="table table-bordered table-striped table-hover">
            <thead>
                <th>Id</th>
                <th>Nombre</th>
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
                        <td>{{ $manual->numprac }}</td>
                        <td><button type="submit" class="btn btn-primary">Edit</button></td>
                        <td><button type="submit" class="btn btn-danger">Del</button></td>
                        <td><button type="submit" class="btn btn-info">Show</button></td>
                    </tr>
                @endforeach
            </tbody>
        </table>





    </div>
@endsection
