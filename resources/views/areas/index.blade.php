@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <a href="{{ route('areas.create') }}" class="btn btn-success">Crear area</a>
            </div>
            <div class="card-body">
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
                                    <a href="{{ route('areas.edit', $area->id) }}" class="btn btn-primary">Edit</a>
                                </td>
                                <td>
                                    <form action="{{ route('areas.destroy', $area->id) }}" method="post">
                                        @csrf
                                        @method("DELETE")
                                        <button type="submit" class="btn btn-danger">Del</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                {{ $areas->links() }}
            </div>
            <div class="card-footer">
                <h1>Sistemas</h1>
            </div>
        </div>
    </div>
@endsection
