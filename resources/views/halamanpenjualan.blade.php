<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="icon" href="{{ asset('../assets/logo.png') }}">
    <title>UMKM INDONESIA</title>
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
                        <a class="nav-link" href="/">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">Bantuan</a>
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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
        <title>Pembelian Barang</title>
    </head>

    <body>

        <div class="container mt-5">
            <h2 class="text-center mb-4">Pembelian Barang</h2>
            <div class="row">
                <!-- Card 1 -->
                <div class="col-md-8">
                    <div class="card mb-4">
                        <img src="/" class="card-img-top" alt="Barang 1">
                        <div class="card-body">
                            <h5 class="card-title">Nama Barang Umkm 1</h5>
                            <p class="card-text">Harga: Rp 125.000</p>
                            <p class="card-text">Stok: 15</p>
                        </div>
                    </div>
                    <!-- Card 2 -->
                    <div class="card mb-4">
                        <img src="/" class="card-img-top" alt="Barang 2">
                        <div class="card-body">
                            <h5 class="card-title">Nama Barang Umkm 2</h5>
                            <p class="card-text">Harga: Rp 45.000</p>
                            <p class="card-text">Stok: 20</p>
                        </div>
                    </div>
                    <!-- Card 3 -->
                    <div class="card mb-4">
                        <img src="/" class="card-img-top" alt="Barang 3">
                        <div class="card-body">
                            <h5 class="card-title">Nama Barang Umkm 3</h5>
                            <p class="card-text">Harga: Rp. 70.000</p>
                            <p class="card-text">Stok: 10</p>
                        </div>
                    </div>
                </div>
                <!-- Form Pembelian -->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Form Pembelian</h5>
                            <form>
                                <div class="mb-3">
                                    <label for="jumlah" class="form-label">Jumlah</label>
                                    <input type="number" class="form-control" id="jumlah" required>
                                </div>
                                <div class="mb-3">
                                    <label for="namaPembeli" class="form-label">Nama Pembeli</label>
                                    <input type="text" class="form-control" id="namaPembeli" required>
                                </div>
                                <div class="mb-3">
                                    <label for="alamatPengiriman" class="form-label">Alamat Pengiriman</label>
                                    <textarea class="form-control" id="alamatPengiriman" rows="3" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Proses Pembelian</button>
                            </form>
                        </div>
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