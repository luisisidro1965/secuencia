@extends('layouts.app')

@section('content')
    <div class="container">
        <form name="selectForm">
            <label for="musicTypes">Elija algunos tipos de música, luego haga clic en el botón de abajo:</label>
            <select id="musicTypes" multiple="multiple" class="form-control">
                <option selected="selected">R&B</option>
                <option>Jazz</option>
                <option>Blues</option>
                <option>New Age</option>
                <option>Classical</option>
                <option>Opera</option>
            </select>
            <input id="btn" type="button" value="¿Cuántos están seleccionados?" />
        </form>
    </div>

    <script>
        function howMany(selectObject) {
            let numberSelected = 0;
            for (let i = 0; i < selectObject.options.length; i++) {
                if (selectObject.options[i].selected) {
                    numberSelected++;
                }
            }
            return numberSelected;
        }

        let btn = document.getElementById('btn');
        btn.addEventListener('click', function() {
            alert('Número de opciones seleccionadas: ' + howMany(document.selectForm.musicTypes));
        });
    </script>

@endsection


