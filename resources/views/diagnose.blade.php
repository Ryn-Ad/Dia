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
            <a class="home-but" href="/"><i class="bx bxs-home"></i></a>
        </div>
        <div class="cardbody-dg">
            <h2>Diagnose</h2>
            <p>Harap untuk memilih gejala yang terdapat pada tanaman tembakau anda:</p>
            <div class="ctr">
                <form action="/proses-diagnose" method="POST">
                    @csrf
                    <table>
                        <colgroup>
                            <col span="1" style="width: 20%;">
                            <col span="1" style="width: 60%;">
                            <col span="1" style="width: 20%;">
                        </colgroup>
                        <tr>
                            <th>KODE GEJALA</th>
                            <th>NAMA GEJALA</th>
                            <th>OPSI</th>
                        </tr>
                        @foreach ($gejala as $g_diagnose)
                        <tr>
                            <td>{{$g_diagnose->kode_gejala}}</td>
                            <td>{{$g_diagnose->nama_gejala}}</td>
                            <td>
                                <input type="hidden" name="gejalas[{{ $g_diagnose->index_gejala }}]">
                                <select name="gejalas[{{ $g_diagnose->index_gejala }}]" id="gejalas[{{ $g_diagnose->index_gejala }}]">
                                    <option value="1" selected>Tidak</option>
                                    <option value="2">Kemungkinan</option>
                                    <option value="3">Ya</option>
                                </select>
                            </td>
                        </tr>
                        @endforeach
                    </table>
                    <button name="submit" id="submit">Cek Penyakit</button>
                </form>
            </div>    
        </div>
    </body>
</html>