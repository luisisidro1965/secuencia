@extends('layouts.app')

@section('css')
    <style>
        /* input[type=radio] {
                        border: 0px;
                        width: 1em;
                        height: 1em;
                    } */

        input[type="radio"+"label"] {
            -ms-transform: scale(1.5);
            /* IE 9 */
            -webkit-transform: scale(1.5);
            /* Chrome, Safari, Opera */
            transform: scale(1.5);
        }

        .radio_container {
            font-size: 20px;
        }
    </style>
@endsection

@section('content')
    <div class="container">

        <form action="{{ route('evalua.store') }}" method="post">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Evaluación cuatrimestral de tutorias</h3>
                    <p>Bienvenido y gracias por su participación en la evaluación del PIT.
                    Por favor indique en cada una de las afirmaciones siguientes cuál de las opciones posibles encaja
                        mejor en la realidad del PIT.</p>
                    <p>
                        El objetivo es conocer su opinión como tutorado del Programa Institucional de Tutorías, del Tutor y
                        del beneficio del Programa; por lo que no hay respuestas correctas e incorrectas.
                        Para determinar las respuestas tampoco se requiere un excesivo análisis de cada cuestión.
                        Por favor responda con total libertad y objetividad dado que la información recogida es anónima
                    </p>
                </div>
                <div class="card-body radio_container">
                    <label><b><em>1. La cordialidad y capacidad del tutor logra crear un clima de confianza
                                para que el alumno pueda exponer sus problemas</em></b></label>
                    <div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp1" id="opc1" value="1"
                                checked />
                            <label class="form-check-label" for="opc1">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp1" id="opc2" value="2" />
                            <label class="form-check-label" for="opc2">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp1" id="opc3" value="3" />
                            <label class="form-check-label" for="opc3">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp1" id="opc4" value="4" />
                            <label class="form-check-label" for="opc4">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp1" id="opc5" value="5" />
                            <label class="form-check-label" for="opc5">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><b>2. Muestra el tutor interés en los problemas académicos y personales que
                                afectan el rendimiento de los alumnos</b></label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp2" id="opc6" value="1"
                                checked>
                            <label class="form-check-label" for="opc6">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp2" id="opc7" value="2">
                            <label class="form-check-label" for="opc7">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp2" id="opc8" value="3">
                            <label class="form-check-label" for="opc8">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp2" id="opc9" value="4">
                            <label class="form-check-label" for="opc9">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp2" id="opc10" value="5">
                            <label class="form-check-label" for="opc10">Totalmente en desacuerdo</label>
                        </div>

                    </div>

                    <div>
                        <label>3. Muestra el tutor capacidad para escuchar los problemas de los
                            alumnos:</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp3" id="opc11" value="1"
                                checked>
                            <label class="form-check-label" for="opc11">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp3" id="opc12" value="2">
                            <label class="form-check-label" for="opc12">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp3" id="opc13"
                                value="3">
                            <label class="form-check-label" for="opc13">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp3" id="opc14"
                                value="4">
                            <label class="form-check-label" for="opc14">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp3" id="opc15"
                                value="5">
                            <label class="form-check-label" for="opc15">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label>4. Muestra el tutor disposición a mantener una comunicación permanente con el alumno</label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp4" id="opc16" value="1"
                                checked>
                            <label class="form-check-label" for="opc16">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp4" id="opc17"
                                value="2">
                            <label class="form-check-label" for="opc17">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp4" id="opc18"
                                value="3">
                            <label class="form-check-label" for="opc18">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp4" id="opc19"
                                value="4">
                            <label class="form-check-label" for="opc19">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp4" id="opc20"
                                value="5">
                            <label class="form-check-label" for="opc20">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label>5. El tutor fomenta la integración del grupo</label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp5" id="opc21" value="1"
                                checked>
                            <label class="form-check-label" for="opc21">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp5" value="2"
                                id="opc22">
                            <label class="form-check-label" for="opc22">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp5" id="opc23"
                                value="3">
                            <label class="form-check-label" for="opc23">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp5" id="opc24"
                                value="4">
                            <label class="form-check-label" for="opc24">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp5" id="opc25"
                                value="5">
                            <label class="form-check-label" for="opc25">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>6. El tutor promueve una metodología y técnicas de estudio</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp6" id="opc26" value="1"
                                checked>
                            <label class="form-check-label" for="opc26">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp6" id="opc27"
                                value="2">
                            <label class="form-check-label" for="opc27">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp6" id="opc28"
                                value="3">
                            <label class="form-check-label" for="opc28">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp6" id="opc29"
                                value="4" />
                            <label class="form-check-label" for="opc29">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp6" id="opc30"
                                value="5" />
                            <label class="form-check-label" for="opc30">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>7. Tiene el tutor capacidad para diagnosticar las dificultades y realizar las acciones
                                pertinentes para resolverlas</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp7" id="opc31" value="1"
                                checked>
                            <label class="form-check-label" for="opc31">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp7" id="opc32"
                                value="2">
                            <label class="form-check-label" for="opc32">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp7" id="opc33"
                                value="3">
                            <label class="form-check-label" for="opc33">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp7" id="opc34"
                                value="4" />
                            <label class="form-check-label" for="opc34">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp7" id="opc35"
                                value="5" />
                            <label class="form-check-label" for="opc35">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>8. ¿El tutor ha utilizado alguna dinámica para la atención individualizada o
                                grupal?</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp8" id="opc36" value="1"
                                checked>
                            <label class="form-check-label" for="opc36">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp8" id="opc37"
                                value="2">
                            <label class="form-check-label" for="opc37">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp8" id="opc38"
                                value="3">
                            <label class="form-check-label" for="opc38">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp8" id="opc39"
                                value="4" />
                            <label class="form-check-label" for="opc39">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp8" id="opc40"
                                value="5" />
                            <label class="form-check-label" for="opc40">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>9. Muestra el tutor buena disposición para atender a los alumnos </em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp9" id="opc41" value="1"
                                checked>
                            <label class="form-check-label" for="opc41">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp9" id="opc42"
                                value="2">
                            <label class="form-check-label" for="opc42">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp9" id="opc43"
                                value="3">
                            <label class="form-check-label" for="opc43">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp9" id="opc44"
                                value="4" />
                            <label class="form-check-label" for="opc44">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp9" id="opc45"
                                value="5" />
                            <label class="form-check-label" for="opc45">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>10. Trata el tutor con respeto y atención a los alumnos</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp10" id="opc46" checked
                                value="1">
                            <label class="form-check-label" for="opc46">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp10" id="opc47"
                                value="2">
                            <label class="form-check-label" for="opc47">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp10" id="opc48"
                                value="3">
                            <label class="form-check-label" for="opc48">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp10" id="opc49"
                                value="4" />
                            <label class="form-check-label" for="opc49">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp10" id="opc50"
                                value="5" />
                            <label class="form-check-label" for="opc50">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>11. Es fácil localizar al tutor que tiene asignado</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp11" id="opc51" checked
                                value="1">
                            <label class="form-check-label" for="opc51">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp11" id="opc52"
                                value="2">
                            <label class="form-check-label" for="opc52">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp11" id="opc53"
                                value="3">
                            <label class="form-check-label" for="opc53">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp11" id="opc54"
                                value="4" />
                            <label class="form-check-label" for="opc54">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp11" id="opc55"
                                value="5" />
                            <label class="form-check-label" for="opc55">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>12. El tutor conoce suficientemente bien la normatividad institucional para aconsejarle
                                las opciones adecuadas a sus problemas escolares</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp12" id="opc56" checked
                                value="1">
                            <label class="form-check-label" for="opc56">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp12" id="opc57"
                                value="2">
                            <label class="form-check-label" for="opc57">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp12" id="opc58"
                                value="3">
                            <label class="form-check-label" for="opc58">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp12" id="opc59"
                                value="4" />
                            <label class="form-check-label" for="opc59">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp12" id="opc60"
                                value="5" />
                            <label class="form-check-label" for="opc60">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>13. El tutor lo canaliza a las instancias adecuadas cuando tiene algún problema que
                                rebasa su área de acción.</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" style=":25px" name="resp13" id="opc61"
                                checked value="1">
                            <label class="form-check-label" for="opc61">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp13" id="opc62"
                                value="2">
                            <label class="form-check-label" for="opc62">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp13" id="opc63"
                                value="3">
                            <label class="form-check-label" for="opc63">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp13" id="opc64"
                                value="4" />
                            <label class="form-check-label" for="opc64">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp13" id="opc65"
                                value="5" />
                            <label class="form-check-label" for="opc65">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>14. Su participación en el programa de tutoría ha mejorado su desempeño
                                académico</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp14" id="opc66" checked
                                value="1">
                            <label class="form-check-label" for="opc66">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp14" id="opc67"
                                value="2">
                            <label class="form-check-label" for="opc67">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp14" id="opc68"
                                value="3">
                            <label class="form-check-label" for="opc68">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp14" id="opc69"
                                value="4" />
                            <label class="form-check-label" for="opc69">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp14" id="opc70"
                                value="5" />
                            <label class="form-check-label" for="opc70">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>15. Su integración a la universidad ha mejorado con el programa de tutoría</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp15" id="opc71" checked
                                value="1">
                            <label class="form-check-label" for="opc71">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp15" id="opc72"
                                value="2">
                            <label class="form-check-label" for="opc72">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp15" id="opc73"
                                value="3">
                            <label class="form-check-label" for="opc73">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp15" id="opc74"
                                value="4" />
                            <label class="form-check-label" for="opc74">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp15" id="opc75"
                                value="5" />
                            <label class="form-check-label" for="opc75">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>16. Es satisfactorio el programa de tutoría</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp16" id="opc76" checked
                                value="1">
                            <label class="form-check-label" for="opc76">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp16" id="opc77"
                                value="2">
                            <label class="form-check-label" for="opc77">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp16" id="opc78"
                                value="3">
                            <label class="form-check-label" for="opc78">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp16" id="opc79"
                                value="4" />
                            <label class="form-check-label" for="opc79">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp16" id="opc80"
                                value="5" />
                            <label class="form-check-label" for="opc80">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                    <div>
                        <label><em>17. ¿Cómo calificaría la actuación del tutor?</em></label>
                        <div class="form-group">
                            <input class="form-check-input" type="radio" name="resp17" id="opc81" checked
                                value="1">
                            <label class="form-check-label" for="opc81">Totalmente de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" height="20px" name="resp17" id="opc82"
                                value="2">
                            <label class="form-check-label" for="opc82">De acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp17" id="opc83"
                                value="3">
                            <label class="form-check-label" for="opc83">Más o menos de acuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp17" id="opc84"
                                value="4" />
                            <label class="form-check-label" for="opc84">En desacuerdo</label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="resp17" id="opc85"
                                value="5" />
                            <label class="form-check-label" for="opc85">Totalmente en desacuerdo</label>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Enviar respuestas</button>
                </div>
            </div>

        </form>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-warning">knjkjklj</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-secondary">jlkjlk</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 bg-primary">kjkjl</div>
        </div>
    </div>
@endsection
