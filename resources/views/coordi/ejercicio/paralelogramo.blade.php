@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="{{ url('/lado') }}" method="POST">
            @csrf
            <form class="row g-3 needs-validation" novalidate>
                <div class="col-md-4">
                    <label for="validationCustom01" class="form-label">Lado A</label>
                    <input type="text" class="form-control" name="lado1" value="Mark" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Lado B</label>
                    <input type="text" class="form-control" name="lado2" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>
                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">ángul A</label>
                    <input type="text" class="form-control" name="angulo" value="Otto" required>
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-md-4">
                    <label for="validationCustom02" class="form-label">Resultado</label>
                    <input type="text" class="form-control" name="resultado" value = "{{ r }}">
                    <div class="valid-feedback">
                        Looks good!
                    </div>
                </div>

                <div class="col-12">
                    <button class="btn btn-primary" type="submit">Submit form</button>
                </div>
            </form>
        </form>
    </div>
@endsection
