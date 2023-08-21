<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Lilita+One&family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="{{ asset('/css/diagnose.css') }}" rel="stylesheet">
        <title>Diagnose</title>
    </head>
    <body>
        <div class="headbar">
            <h1>DiaCo</h1>
            <a class="home-but" href="/"><i class='bx bxs-home'></i></a>
        </div>
        <div class="cardbody ctr">
            <h2>Uh Oh!<br>
                Penyakit pada tembakau<br>
                Anda berupa:</h2>
            <h3>Nama Penyakit</h3>
                <form>
                    <button type="submit">{{ __('Cek Solusi') }}</button>
                </form>
        </div>
    </body>
</html>