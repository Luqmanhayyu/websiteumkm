<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('../assets/logo.png') }}">
    <title>UMKM IDONESIA</title>
</head>

<style>
    .banner {
        background-image: url('path/to-your-image.jpg');

        background-size: cover;
        background-position: center;
        color: #fff;

        padding: 100px 0;
        text-align: center;
        position: relative;
    }

    .banner h4 {
        font-size: 2.5em;
        margin-bottom: 20px;
        color: #000000;

    }

    .banner h3 {
        font-size: 2em;
        margin-bottom: 30px;
    }

    .banner button {
        font-size: 1.2em;
        background-color: #007bff;

        border: none;
        padding: 10px 20px;
        color: #fff;

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

    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-4">Vidio Pelatihan UMKM Indonesia</h4>
        </div>
    </div>

    <!--Pelatihan -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <div class="row pt-4 gx-4 gy-4">
                <div class="row">
                    <!-- Video 1 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan1.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 1</h5>
                                <p class="card-text">UMKM Di Era Pandemi Covid</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video 2 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan2.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 2</h5>
                                <p class="card-text">UMKM Global Bersama Whatsapps</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video 3 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan3.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 3</h5>
                                <p class="card-text">Peltihan Whatsapp Bisnis Untuk UMKM Pemula</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Second Row -->
                <div class="row">
                    <!-- Video 4 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan4.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 4</h5>
                                <p class="card-text">Inventory Management.</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video 5 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan5.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 5</h5>
                                <p class="card-text">Bussiness Strategy</p>
                            </div>
                        </div>
                    </div>
                    <!-- Video 6 -->
                    <div class="col-md-4">
                        <div class="card crop-img">
                            <video width="100%" height="200" controls>
                                <source src="assets/pelatihan6.mp4" type="video/mp4">
                            </video>
                            <div class="card-body">
                                <h5 class="card-title">Pelatihan 6</h5>
                                <p class="card-text">Bisnis Strategy Pemula</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-4">
        <ul class="pagination justify-content-end">
            <li class="page-item disabled">
                <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item">
                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item">
                <a class="page-link" href="/halamanpelatihan2">Next</a>
            </li>
        </ul>
    </div>
    <div class="container text-center pt-5 pb-5">
        UMKM Indonesia &copy; 2023
    </div>
</body>

</html>