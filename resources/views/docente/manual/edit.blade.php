@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Manual actual</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('manuales.update', $manual->id) }}" method="post">
                @csrf
                @method('PATCH')
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $manual->nombre }}" />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input type="text" name="autor" class="form-control" placeholder="Autor" value="{{ $manual->autor }}"/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero de prácticas</label>
                    <input type="number" name="numprac" class="form-control" value="{{ $manual->numprac }}"/>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </form>
        </div>

        <div class="card-footer">

        </div>

    </div>
</div>
@endsection
