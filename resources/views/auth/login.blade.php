@extends('layout.main')

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Belépés</title>
    </head>
@section('tartalom')
    <div class="container">
        <div class="row center-xs">
            <div class="col-xs-5">
                <form class="form" method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1 class="h3 mb-3 font-weight-normal">Kérlek Jelentkezz be</h1>

                    {{--  Email   --}}
                    <label for="email" class="sr-only">Email cím</label>
                    <input type="email" id="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email cím" autocomplete="email" required autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{--  Password  --}}
                    <label for="password" class="sr-only">Jelszó</label>
                    <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="password" alue="{{ old('password') }}" placeholder="Jelszó" autocomplete="password" required autofocus>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror

                    {{--  checkbox  --}}
                    <div class="checkbox mb-3">
                        <label>
                            <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Emlékezzen rám
                        </label>
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Bejelentkezem</button>
                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif

                    <p class="mt-5 mb-3 text-muted">&copy; Ingatlanfox 2016-2020</p>
                </form>
            </div>
        </div>    
    </div>
@endsection