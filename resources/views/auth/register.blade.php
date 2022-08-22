@extends('layouts.app')
<style>
    html {
    width: 100%;
    height: 100%;
    }

    body {
    background: #ebffff;
    color: rgba(0, 0, 0, 0.6);
    font-family: "Roboto", sans-serif;
    font-size: 14px;
    line-height: 1.6em;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
    }

    .overlay, .form-panel.one:before {
    position: absolute;
    top: 0;
    left: 0;
    display: none;
    background: rgba(0, 0, 0, 0.8);
    width: 100%;
    height: 100%;
    }

    .form {
    z-index: 15;
    position: relative;
    width: 550px;
    border-radius: 4px;
    margin: auto;
    overflow: hidden;
    padding-left: 50%;
    }

    .form1 {
    z-index: 15;
    position: absolute;
    width: 600px;
    overflow: hidden;
    padding-left: 120px;
    padding-top: 10px;
    }
    .form-toggle {
    z-index: 10;
    position: absolute;
    top: 50px;
    right: 60px;
    background: #FFFFFF;
    width: 60px;
    height: 60px;
    border-radius: 100%;
    transform-origin: center;
    transform: translate(0, -25%) scale(0);
    opacity: 0;
    cursor: pointer;
    transition: all 0.3s ease;
    }
    .form-toggle:before, .form-toggle:after {
    content: "";
    display: block;
    position: absolute;
    top: 50%;
    left: 50%;
    width: 30px;
    height: 4px;
    background: #4285F4;
    transform: translate(-50%, -50%);
    }
    .form-toggle:before {
    transform: translate(-50%, -50%) rotate(45deg);
    }
    .form-toggle:after {
    transform: translate(-50%, -50%) rotate(-45deg);
    }
    .form-toggle.visible {
    transform: translate(0, -25%) scale(1);
    opacity: 1;
    }
    .form-group {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    margin: 0 0 20px;
    }
    .form-group:last-child {
    margin: 0;
    }
    .form-group label {
    display: block;
    margin: 0 0 10px;
    color: rgba(125, 136, 132);
    font-size: 12px;
    font-weight: 400;
    line-height: 1;
    text-transform: uppercase;
    letter-spacing: 0.2em;
    }
    .two .form-group label {
    color: #FFFFFF;
    }
    .form-group input {
    outline: none;
    display: block;
    background: #ffffff;
    width: 150%;
    border: 2px solid rgba(125, 136, 132);
    border-radius: 7px;
    box-sizing: border-box;
    padding: 10px 18px;
    color: rgba(125, 136, 132);
    font-family: inherit;
    font-size: inherit;
    font-weight: 450;
    line-height: inherit;
    transition: 0.3s ease;
    }
    .form-group input:focus {
    color: rgba(125, 136, 132);
    }
    .two .form-group input {
    color: #FFFFFF;
    }
    .two .form-group input:focus {
    color: #FFFFFF;
    }
    .form-group button {
    outline: none;
    background: #ef6f4c;
    width: 70%;
    border: 0;
    border-radius: 4px;
    padding: 12px 20px;
    color: #FFFFFF;
    font-family: inherit;
    font-size: inherit;
    font-weight: 500;
    line-height: inherit;
    cursor: pointer;

    }
    .two .form-group button {
    background: #FFFFFF;
    color: #4285F4;
    }
    .form-group .form-remember {
    font-size: 12px;
    font-weight: 400;
    letter-spacing: 0;
    text-transform: none;

    }
    .form-group .form-remember input[type=checkbox] {
    display: inline-block;
    width: auto;
    margin: 0 10px 0 0;
    border: 2px solid rgba(125, 136, 132);
    }
    .form-group .form-recovery {
    color: #4285F4;
    font-size: 12px;
    text-decoration: none;
    }
    .form-panel {
    padding: 60px calc(5% + 60px) 60px 60px;
    box-sizing: border-box;
    }
    .form-panel.one:before {
    content: "";
    display: block;
    opacity: 0;
    visibility: hidden;
    transition: 0.3s ease;

    }
    .form-panel.one.hidden:before {
    display: block;
    opacity: 1;
    visibility: visible;
    }
    .form-panel.two {
    z-index: 5;
    position: absolute;
    top: 0;
    left: 95%;
    background: #4285F4;
    width: 100%;
    min-height: 100%;
    padding: 60px calc(10% + 60px) 60px 60px;
    transition: 0.3s ease;
    cursor: pointer;
    }
    .form-panel.two:before, .form-panel.two:after {
    content: "";
    display: block;
    position: absolute;
    top: 60px;
    left: 1.5%;
    background: rgba(255, 255, 255, 0.2);
    height: 30px;
    width: 2px;
    transition: 0.3s ease;
    }
    .form-panel.two:after {
    left: 3%;
    }
    .form-panel.two:hover {
    left: 93%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }
    .form-panel.two:hover:before, .form-panel.two:hover:after {
    opacity: 0;
    }
    .form-panel.two.active {
    left: 10%;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    cursor: default;
    }
    .form-panel.two.active:before, .form-panel.two.active:after {
    opacity: 0;
    }
    .form-header {
    margin: 0 0 0px;
    padding-left: 110px;
    }
    .form-header h1 {
    padding: 0px 0;
    color: #4285F4;
    font-size: 24px;
    font-weight: 700;
    text-transform: uppercase;
    }
    .two .form-header h1 {
    position: relative;
    z-index: 40;
    color: #FFFFFF;
    }
    .pen-footer {
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    width: 600px;
    margin: 10px auto 100px;
    }
    .pen-footer a {
    color: #FFFFFF;
    font-size: 12px;
    text-decoration: none;
    text-shadow: 1px 2px 0 rgba(0, 0, 0, 0.1);
    }
    .pen-footer a .material-icons {
    width: 12px;
    margin: 0 5px;
    vertical-align: middle;
    font-size: 12px;
    }

    .cp-fab {
    background: #ebffff !important;
    color: #ebffff !important;
    }
</style>
@section('content')
<div class="form1">
    <img src="img/grande.png" alt="" class="img-fluid" width="95%" height="440px">
</div>
<div class="form">
    <div class="form-panel one">
      <div class="form-header" >
        <img src="img/logo.png" alt="" class="img-fluid" width="60%" height="85px" >
      </div>
       <div class="form-content">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <input id="name" type="name" name="name" required="required" placeholder="Nombres y Apellidos"/>
                </div>
                <div class="form-group">
                    <input id="email" type="email" name="email" required="required" placeholder="Email"/>
                </div>
                <div class="form-group">
                    <input id="password" type="password" name="password" required="required" placeholder="Contraseña"/>
                </div>
                <div class="form-group">
                    <input id="password-confirm" type="password" name="password_confirmation" required="required" placeholder="Confirmar contraseña"/>
                </div>
                <a href="/login" style="color:gray;text-decoration: none">Iniciar sesión</a>
                <div class="form-group" style="padding-left: 25%;">
                    <button type="submit" >{{ __('Register') }}</button>
                </div>
            </form>
      </div>
    </div>
  </div>
  <footer>
    <img src="img/footer.png" alt="" class="img-fluid" width="100%" height="125px" >
</footer>
{{-- <div class="container">
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
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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
</div> --}}
@endsection
