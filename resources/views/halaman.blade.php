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

    <div class="container-fluid banner">
        <div class="container text-center">
            <h4 class="display-4">Selamat Datang di Website BANTU UMKM</h4>
            <h3 class="display-5">Hai,Halo!</h3>
            <a href="/">
                <button type="button" class="btn btn-primary btn-lg">Cek Selengkapnya</button>
            </a>
        </div>
    </div>
    <!-- layanan -->

    <div class="container-fluid layanan pt-5 pb-5">
        <div class="container text-center">
            <p>

            </p>
            <div class="row pt-4">
                <div class="col-md-4">
                    <a href="/halamanpenjualan">
                        <span class="lingkaran"><i class="fas fa-shopping-cart fa-5x"></i></span>
                    </a>
                    <h3 class="mt-3">Belanja</h3>
                    <p>
                        Belanja Produk-Produk UMKM Di Manapun Dan Kapanpun
                    </p>
                </div>
                <div class="col-md-4">
                    <a href="/halamanpelatihan1">
                        <span class="lingkaran"><i class="fas fa-shopping-basket fa-5x"></i></span>
                    </a>
                    <h3 class="mt-3">Pelatihan</h3>
                    <p>
                        Penjualan Produk UMKM Melalui Online
                    </p>
                </div>

                <div class="col-md-4">
                    <a href="halamanebook">
                        <span class="lingkaran"><i class="fas fa-book fa-5x"></i></span>
                    </a>
                    <h3 class="mt-3">E-Book Pelatihan</h3>
                    <p>
                        E-Book Pelatihan Mengenai Penjualan UMKM
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!--card isi -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="isi"></h2>
            <p>
            </p>
            <!--card1 -->
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm1.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Teko </h5>
                            <p class="card-text">

                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis teko.</p>
                        </div>
                    </div>
                </div>
                <!--card2 -->
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm2.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Kendi Jawa</h5>
                            <p class="card-text">
                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis kendi.
                            </p>
                        </div>
                    </div>
                </div>
                <!--card3 -->
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm3.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Tas Adat</h5>
                            <p class="card-text">
                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis tas
                            </p>
                        </div>
                    </div>
                </div>
                <!--card4 -->
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm4.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Sangkar Burung Hias</h5>
                            <p class="card-text">
                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis sangkar burung.
                            </p>
                        </div>
                    </div>
                </div>
                <!--card5 -->
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm5.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Kerajinan Adat</h5>
                            <p class="card-text">
                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis kerajinan adat.
                            </p>
                        </div>
                    </div>
                </div>
                <!--card6 -->
                <div class="col-md-4">
                    <div class="card crop-img">
                        <img src="assets/fotoumkm6.png" class="card-img-top" width="200" height="200" />
                        <div class="card-body">
                            <h5 class="card-title">UMKM Pengerajin Aksesoris Daerah</h5>
                            <p class="card-text">
                                UMKM (Usaha Mikro, Kecil, dan Menengah) pengerajin teko adalah jenis usaha mikro, kecil, atau menengah yang berfokus pada produksi dan penjualan berbagai jenis aksesoris daerah.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- tentang -->
    <div class="container-fluid pt-5 pb-5">
        <div class="container">
            <h2 class="display-3 text-center" id="tentang">Tentang</h2>
            <p class="text-center">
                Website Umkm Indonesia Yang Dibuat Untuk Mensejahterahkan Para Umkm-Umkm Indonesia.
            </p>
            <div class="clearfix pt-5">
                <img src="https://img.freepik.com/free-vector/about-us-website-banner-concept-with-thin-line-flat-design_56103-96.jpg?size=626&ext=jpg" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300" />
                <p>
                    UMKM adalah singkatan dari Usaha Mikro, Kecil, dan Menengah. Istilah ini mengacu pada segmen usaha yang memiliki skala kecil hingga menengah dalam hal omset atau jumlah karyawan. Di Indonesia, UMKM memiliki definisi resmi yang dikeluarkan oleh Kementerian Koperasi dan UKM Republik Indonesia.
                </p>
                <p>
                    Menurut definisi resmi pemerintah Indonesia, UMKM terbagi menjadi tiga kategori berdasarkan kriteria omset atau nilai aset:
                </p>
                <p>
                    UMKM memainkan peran penting dalam perekonomian Indonesia. Mereka berkontribusi dalam menciptakan lapangan kerja, memperluas akses pasar, dan mendukung pertumbuhan ekonomi di tingkat lokal maupun nasional. Pemerintah Indonesia secara aktif mendorong dan memberikan berbagai dukungan untuk memajukan sektor UMKM di negara ini.
                </p>

            </div>
        </div>
    </div>
    <!-- tim -->
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container text-center">
            <h2 class="display-3" id="staff">Tim Kami</h2>
            <p>
                Team Development Pembuatan Website UMKM Indonesia
            </p>
            <!--tim logo -->
            <div class="row pt-4 gx-4 gy-4">
                <div class="col-md-4 text-center tim">
                    <img src="assets/userlogo.png" class="card-img-top" width="160" height="220" />
                    <h4>Dinar Abadan</h4>
                    <p>Web Designer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <!--tim logo -->
                <div class="col-md-4 text-center tim">
                    <img src="assets/userlogo.png" class="card-img-top" width="160" height="220" />
                    <h4>Faiz Fakhrie </h4>
                    <p>Data Scientist</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
                <!--tim logo -->
                <div class="col-md-4 text-center tim">
                    <img src="assets/userlogo.png" class="card-img-top" width="160" height="220" />
                    <h4>Luqman</h4>
                    <p>UI UX Designer</p>
                    <p>
                        <a href="" class="social"><i class="fab fa-twitter"></i></a>
                        <a href="" class="social"><i class="fab fa-facebook-f"></i></a>
                        <a href="" class="social"><i class="fab fa-linkedin-in"></i></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- kontak -->
    <div class="container-fluid pt-5 pb-5 kontak">
        <div class="container">
            <h2 class="display-3 text-center" id="kontak">Kontak Kami</h2>
            <p class="text-center">
                Tuliskan Semua Pertanyaan Yang Kamu Tanyakan Di Bawah
            </p>
            <div class="row pb-3">
                <div class="col-md-6">
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Nama" />
                    <input class="form-control form-control-lg mb-3" type="text" placeholder="Email" />
                    <input class="form-control form-control-lg" type="text" placeholder="No. Phone" />
                </div>
                <div class="col-md-6">
                    <textarea class="form-control form-control-lg" rows="5"></textarea>
                </div>
            </div>
            <div class="col-md-3 mx-auto text-center">
                <button type="button" class="btn btn-primary btn-lg">
                    Kirim Pesan
                </button>
            </div>
        </div>
    </div>
    <div class="container text-center pt-5 pb-5">
        UMKM Indonesia &copy; 2023
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous">
    </script>
</body>

</html>