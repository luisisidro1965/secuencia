@extends('layouts.app')

@section('css')
    <style>
        html,
        body,
        #mapa {
            height: 500px;
            width: 800px;
            margin: 0px;
            padding: 0px;
        }
    </style>
@endsection

@section('js')
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="{{ asset('js/geo.js') }}"></script>
    <script src="~fine-uploader/fine-uploader.core.min.js"></script>
@endsection

@section('content')
<h1>Lista de mapas</h1>
    <div id="mapa"></div>

@endsection
