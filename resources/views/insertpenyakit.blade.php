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
        <link href="{{ asset('/css/adminstyle.css') }}" rel="stylesheet">
        <title>Tambah Data Penyakit</title>
    </head>
    <body>
        @auth
        <div class="sidebar">
            <div class="logo_content">
                <div class="title_name">DiaCo</div>
                <i class='bx bx-menu' id="btn"></i>
            </div>
            <ul class="nav_list">
                <li>
                    <a href="/dashboard">
                        <i class='bx bxs-dashboard'></i>
                        <span class="link_name">Dashboard</span>
                    </a>
                    <!-- <span class="tooltip">Dashboard</span> -->
                </li>
                <li>
                    <a href="/gejala">
                        <i class='bx bxs-leaf'></i>
                        <span class="link_name">List Gejala</span>
                    </a>
                    <!-- <span class="tooltip">List Gejala</span> -->
                </li>
                <li>
                    <a href="/penyakit">
                        <i class='bx bxs-virus'></i>
                        <span class="link_name">List Penyakit</span>
                    </a>
                    <!-- <span class="tooltip">List Penyakit</span> -->
                </li>
                <li>
                    <a href="/aturan">
                        <i class='bx bxs-flag-alt'></i>
                        <span class="link_name">Aturan Penyakit</span>
                    </a>
                    <!-- <span class="tooltip">Aturan Penyakit</span> -->
                </li>
            </ul>
            <div class="logout_content">
                <div class="logout">
                    <div class="logout_details">
                        <img src="/images/user.png" alt="">
                        <div class="logout_job">
                            <div class="name">Logged in as</div>
                            <div class="role">Administrator</div>
                        </div>
                    </div>
                    <a href="/admin" class="log_out">
                        <i class='bx bx-log-out' id="log_out"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="main_content_one">
        <div class="one_text">TAMBAH DATA PENYAKIT</div>
            <div class="add_space">
                </div>
                    <form action="/proses-penyakit" method="POST">
                        @csrf
                    <label for="kode_penyakit">Kode Penyakit :</label>
                    <input type="text" id="kode_penyakit" name="kode_penyakit">
                    <label for="nama_penyakit">Nama Penyakit :</label>
                    <input type="text" id="nama_penyakit" name="nama_penyakit">
                    <label for="solusi_penyakit">Solusi Penyakit :</label>
                    <input type="textarea" id="solusi_penyakit" name="solusi_penyakit">
                    <button class="tambah">Tambah</button>
                    </form>
                </div>

        <script>
            let btn = document.querySelector("#btn");
            let sidebar = document.querySelector(".sidebar");
            
            btn.onclick = function() {
                sidebar.classList.toggle("active");
            }
        </script>
        @endauth

        @guest
        <div>
            <h1>403 | Forbidden Access</h1>
        </div>
        @endguest
    </body>
</html>
    