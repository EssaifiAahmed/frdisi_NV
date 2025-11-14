<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>FRDISI - Login</title>
    <link rel="stylesheet" href="{{ asset('assets/css/loginStyle.css') }}">
</head>

<body>
    <div class="login-container">
        <div class="profile-img"></div>
        <h2 style="margin-bottom: 13%;">FRDISI - Authentification</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="input-field">
                <i>👤</i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                    placeholder="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="input-field">
                <i>🔒</i>
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="current-password" placeholder="password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <button class="btn" type="submit">Connecté</button>

        </form>
    </div>
</body>

</html>
