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
            <form method="POST" action="/admin-login">
                @csrf
                <label for="name">Username :</label> <br>
                <input id="name" type="text" name="name" required>
                <br>
                <label for="password">Password :</label> <br>
                <input id="password" type="password" name="password" required>
                <button>Login</button>
            </form>
        </div>
    </body>
</html>