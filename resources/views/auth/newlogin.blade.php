<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <title>Belépés</title>
        <link href="/css/signin.css" rel="stylesheet">
    </head>
    <body class="text-center">
        <form class="form-signin" method="POST" action="{{ route('login') }}">
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
            <input type="password" id="password" class="form-control @error('password') is-invalid @enderror" name="email" alue="{{ old('email') }}" placeholder="Jelszó" autocomplete="email" required autofocus>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            {{--  checkbox  --}}
            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember me
                </label>
            </div>
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            @if (Route::has('password.request'))
                <a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Forgot Your Password?') }}
                </a>
            @endif

            <p class="mt-5 mb-3 text-muted">&copy; 2017-2019</p>
        </form>
    </body>
</html>