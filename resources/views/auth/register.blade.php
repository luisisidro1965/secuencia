@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" name="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" 
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="apellidos"
                                    class="col-md-4 col-form-label text-md-end">{{ __('apellidos') }}</label>

                                <div class="col-md-6">
                                    <input id="apellidos" name="apellidos" type="text"
                                        class="form-control @error('apellidos') is-invalid @enderror" 
                                        value="{{ old('apellidos') }}" required autocomplete="apellidos" autofocus>

                                    @error('apellidos')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="sexo"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Sexo') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="sexo">
                                        <option selected>Selecione el sexo</option>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" name="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" 
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" name="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" 
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="rol"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Rol') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="rol">
                                        <option selected>Selecione el rol</option>
                                        <option value="0">Tutorado</option>
                                        <option value="1">Tutor</option>
                                        <option value="2">Docente</option>
                                        <option value="3">Coordinador</option>
                                        <option value="4">Asistente</option>
                                        <option value="5">Director</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="progedu"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Programa educativo') }}</label>
                                <div class="col-md-6">
                                    <select class="form-select" name="progedu">
                                        <option selected>Selecione el Programa educativo</option>
                                        <option value="MEC">Mecanica</option>
                                        <option value="MKT">Mecatronica</option>
                                        <option value="ENR">Energías renovables</option>
                                        <option value="TI">Tecnologías de la información</option>
                                        <option value="CTD">Asistente</option>
                                        <option value="ADM">Administrador</option>
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="foto"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Foto') }}</label>

                                <div class="col-md-6">
                                    <input id="foto" type="file" class="form-control" name="foto" required>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
