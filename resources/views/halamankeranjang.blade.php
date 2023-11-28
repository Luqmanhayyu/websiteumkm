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
    <div class="container mt-5">
        <h1 class="mb-4">Shopping Cart</h1>

        <div class="row">
            <div class="col-md-8">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Jumlah</th>
                            <th>Total Belanja</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Tampilkan item dari keranjang -->
                        <!--ke 1 -->
                        <tr>
                            <td>Nama Barang 1 UMKM</td>
                            <td>Rp. 12.000</td>
                            <td>2</td>
                            <td>Rp. 24.0000</td>
                        </tr>
                        <!--ke 2 -->
                        <tr>
                            <td>Nama Barang 2 UMKM</td>
                            <td>Rp. 32.000</td>
                            <td>1</td>
                            <td>Rp. 32.0000</td>
                        </tr>
                        <!--ke 3 -->
                        <tr>
                            <td>Nama Barang 3 UMKM</td>
                            <td>Rp. 7.540</td>
                            <td>4</td>
                            <td>Rp. 30.160</td>
                        </tr>
                        <!--ke 4 -->
                        <tr>
                            <td>Nama Barang 4 UMKM</td>
                            <td>Rp. 9.100</td>
                            <td>3</td>
                            <td>Rp. 27.300</td>
                        </tr>
                        <!--ke 5 -->
                        <tr>
                            <td>Nama Barang 5 UMKM</td>
                            <td>Rp. 120.000</td>
                            <td>1</td>
                            <td>Rp. 120.0000</td>
                        </tr>
                        <!--ke 6 -->
                        <tr>
                            <td>Nama Barang 6 UMKM</td>
                            <td>Rp. 19.100</td>
                            <td>5</td>
                            <td>Rp. 95.500</td>
                        </tr>
                        <!--ke 7 -->
                        <tr>
                            <td>Nama Barang 7 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>2</td>
                            <td>Rp. 26.000</td>
                        </tr>
                        <!--ke 8 -->
                        <tr>
                            <td>Nama Barang 8 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>2</td>
                            <td>Rp. 26.000</td>
                        </tr>
                        <!--ke 9 -->
                        <tr>
                            <td>Nama Barang 9 UMKM</td>
                            <td>Rp. 33.000</td>
                            <td>2</td>
                            <td>Rp. 66.000</td>
                        </tr>
                        <!--ke 10 -->
                        <tr>
                            <td>Nama Barang 10 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>5</td>
                            <td>Rp. 65.000</td>
                        </tr>
                        <!--ke 11 -->
                        <tr>
                            <td>Nama Barang 10 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>5</td>
                            <td>Rp. 65.000</td>
                        </tr>
                        <!--ke 12 -->
                        <tr>
                            <td>Nama Barang 10 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>5</td>
                            <td>Rp. 65.000</td>
                        </tr>
                        <!--ke 13 -->
                        <tr>
                            <td>Nama Barang 10 UMKM</td>
                            <td>Rp. 13.000</td>
                            <td>5</td>
                            <td>Rp. 65.000</td>
                        </tr>
                        <!-- Item lainnya di sini -->
                    </tbody>
                </table>
            </div>

            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Keranjang Pembelanjaan</h5>
                        <p>Total Items: 16</p>
                        <p>Total Harga: Rp. 706.960</p>
                        <a href="#" class="btn btn-primary">Bayar Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</html>
<div class="container mt-5">
</div>

<div class="container text-center pt-5 pb-5">
    UMKM Indonesia &copy; 2023
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">

</script>
</body>

</html>