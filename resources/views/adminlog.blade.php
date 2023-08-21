<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href="{{ asset('/css/adminlog.css') }}" rel="stylesheet">
        <title>DiaCo Admin Login</title>
    </head>
    <body>
        <div class="logcard logtexture">
            <h1>DiaCo</h1>
            <h2>Admin Login</h2>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="user">Username :</label> <br>
                <input id="user" type="text" class="form-control @error('user') is-invalid @enderror" name="user" value="{{ old('user') }}" required autocomplete="user" autofocus>

                @error('user')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                <br>

                <label for="password">Password :</label> <br>
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror

                <button type="submit">
                    Login
                </button>
            </form>
        </div>
    </body>
</html>