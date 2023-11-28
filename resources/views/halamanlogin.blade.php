<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="{{ asset('../style.css') }}" rel="stylesheet" />
    <link rel="icon" href="{{ asset('../assets/logo.png') }}">
</head>
<title>UMKM INDONESIA</title>

<body class="bg-light">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="assets/logo.png" alt="Logo" width="100" height="40" class="d-inline-block align-text-top">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <form class="d-flex ms-1">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="/">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/">layanan</a>
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

    <div class="container mt-5 d-flex justify-content-center align-items-center" style="height: 80vh;">
        <div class="card w-50">
            <div class="card-body">
                <h2 class="card-title text-center mb-4">Login</h2>

                <form id="registrationForm">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="mb-3">
                        <label for="confirmPassword" class="form-label">Re Password</label>
                        <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required>
                    </div>

                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="agreeTerms" name="agreeTerms" required>
                        <label class="form-check-label" for="agreeTerms">I agree to the terms and conditions</label>
                    </div>

                    <button type="button" class="btn btn-primary w-100" onclick="redirectToHalaman()">Login</button>
                </form>
            </div>
        </div>
    </div>

    <div class="container text-center pt-5 pb-5">
        BANTU UMKM &copy; 2023
    </div>

    <script>
        function redirectToHalaman() {
            window.location.href = "/";
        }
    </script>
</body>

</html>