<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('../assets/logo.png') }}">

</head>

<style>
    .banner {
        background-image: url('path/to-your-image.jpg');
        /* Replace with your banner image */
        background-size: cover;
        background-position: center;
        color: #fff;
        /* White text color */
        padding: 100px 0;
        text-align: center;
        position: relative;
    }

    .banner h4 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #000000;
        /* Blue text color */
    }

    .banner h3 {
        font-size: 2em;
        margin-bottom: 30px;
    }

    .banner button {
        font-size: 1.2em;
        background-color: #007bff;
        /* Blue background color */
        border: none;
        padding: 10px 20px;
        color: #fff;
        /* White text color */
        cursor: pointer;
    }
</style>


<body>
    <!-- navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <!--logo -->
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
            </a>
            <!--pemisah logo -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Form pencarian -->
            <form class="d-flex ms-1">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <!-- End Form pencarian -->

            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/halamanregister">Register</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#tentang">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#staff">Bantuan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/halamanlogin">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/halamankeranjang">Keranjang</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <body class="container mt-5">

        <h2 class="text-center mb-4">Daftar E-Book</h2>

        <div class="row">
            <!-- Buku 1 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 1">
                    <div class="card-body">
                        <h5 class="card-title">Entrepreneurship Digital</h5>
                        <p class="card-text">Penulis: Alexy Be</p>
                        <p class="card-text">Deskripsi:Entrepreneurship Digital</p>
                    </div>
                </div>
            </div>

            <!-- Buku 2 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 2">
                    <div class="card-body">
                        <h5 class="card-title">UMKM Global</h5>
                        <p class="card-text">Penulis: Andree lee</p>
                        <p class="card-text">Deskripsi:UMKM Global</p>
                    </div>
                </div>
            </div>

            <!-- Buku 3 -->
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Buku 3">
                    <div class="card-body">
                        <h5 class="card-title">Bisnis Strategy Pemula</h5>
                        <p class="card-text">Penulis: Stedward Hick</p>
                        <p class="card-text">Deskripsi:Bisnis Strategy Pemula</p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8q+ua/cacFZ5yTwR8H8p/D3VoD4U2a9ir5D8fLXYpv7cJfJZOe5vlQG6vYsn" crossorigin="anonymous"></script>
    </body>

</html>
<div class="container text-center pt-5 pb-5">
    UMKM Indonesia &copy; 2023
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">

</script>
</body>

</html>