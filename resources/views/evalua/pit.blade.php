@extends('layouts.app')

@section('content')
    <div class="container">
        <form action="" method="post">
            <div class="card">
                <label for="" class="text-center">Evaluación cuatrimestral de tutorias</label>
                <div class="card-body">

                    <label for="">1. La cordialidad y capacidad del tutor logra crear un clima de confianza para que
                        el alumno pueda exponer sus problemas</label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Totalmente de acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            De acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Más o menos de acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            En desacuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Totalmente en desacuerdo
                        </label>
                    </div>


                    <label for=""><b>2. Muestra el tutor interés en los problemas académicos y personales que
                            afectan el rendimiento de los alumnos</b></label>

                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Totalmente de acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked placeholder="ksjhdfkhskdfdsf">
                        <label class="form-check-label" for="flexRadioDefault2">
                            De acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Más o menos de acuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            En desacuerdo
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Totalmente en desacuerdo
                        </label>
                    </div>



                    <label for="">3. Muestra el tutor capacidad para escuchar los problemas de los alumnos:</label>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2"
                            checked>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Totalmente en desacuerdo
                        </label>
                    </div>

                </div>
            </div>
        </form>
    </div>

    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-warning">knjkjklj</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-secondary">jlkjlk</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-primary">kjkjl</div>
        </div>
    </div>
@endsection
