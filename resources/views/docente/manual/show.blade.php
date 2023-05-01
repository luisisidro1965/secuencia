@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <h1>Manual actual</h1>
        </div>

        <div class="card-body">
            <form action="{{ route('manuales.store') }}" method="post">
                @csrf
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nombre</label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre" value="{{ $manual->nombre }}" disabled />
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Autor</label>
                    <input type="text" name="autor" class="form-control" placeholder="Autor" value="{{ $manual->autor }}" disabled/>
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Numero de prácticas</label>
                    <input type="number" name="numprac" class="form-control" value="{{ $manual->numprac }}" disabled/>
                </div>
                <button type="submit" class="btn btn-primary">Regresar</button>
            </form>
        </div>

        <div class="card-footer">

        </div>

    </div>
</div>
@endsection