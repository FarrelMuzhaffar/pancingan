<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="style.css"> 
  <title>Alat Pancing</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg bg-primary fixed-top">
      <div class="container">
        <h3><i class="fa-solid fa-cart-shopping text-light me-2"></i></h3>
        <a class="navbar-brand text-light fw-bold" href="#">Alat Pancing</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
          <ul class="navbar-nav ms-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
            <li class="nav-item ">
              <a class="nav-link active text-light fw-bold" aria-current="page" href="?menu=1">Beranda</a>
            </li>
            <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light fw-bold" href="?menu=2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Belanja
          </a>
          <ul class="dropdown-menu bg-primary border-0 outline-none">
            <li><a class="dropdown-item text-light " href="?menu=2#joran">Joran</a></li>
            <li><a class="dropdown-item" href="?menu=2#kerekan">Kerekan</a></li>
            <li><a class="dropdown-item" href="?menu=2#kail">Kail</a></li>
            <li><a class="dropdown-item" href="?menu=2#umpan">Umpan</a></li>
            <li><a class="dropdown-item" href="?menu=2#tas">Tas</a></li>
          </ul>
        </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="?menu=3">Tentang Kami</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-light fw-bold" href="?menu=4">Bantuan</a>
            </li>
          </ul> 
          <form class="d-flex " role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Search</button>
          </form>
          <div class="icon mt-2">
            <h5>
              <i class="fa-solid fa-cart-shopping ms-3 me-3 text-light" data-bs-toggle="tooltip" title="Keranjang Belanja"></i>
              <i class="fa-solid fa-envelope me-3 text-light" data-bs-toggle="tooltip" title="Surat Masuk"></i>
              <i class="fa-solid fa-bell me-3 text-light" data-bs-toggle="tooltip" title="Notifikasi"></i>
            </h5>
          </div>
        </div>
      </div>
   </nav>

      <div class="row mt-5 no-gutters">
         <div class="col-md-2 bg-light">
             <ul class="list-group list-group-flush p-2 pt-4">
                <li class="list-group-item bg-primary text-light fw-bold"><i class="fas fa-list "></i> Kategori Produk</li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Pralatan Pancing</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Joran</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Kail</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Umpan</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Jaring Ikan</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Aksesoris Pancing</a></li>
                <li class="list-group-item"><i class="fas fa-angle-right"></i><a href="" class="text-decoration-none fw-bold text-primary"> Buku Panduan</a></li>
             </ul>
         </div>
         <div class="col-md-10">