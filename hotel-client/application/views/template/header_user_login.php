<!doctype html>
<html lang="en">
  <head>

  <style>
  .badge{
    margin-left:3px;
  }
  #menu{
  margin: 0;
  padding: 0;
  margin-top: 0px;
  }
  #menu li{
    list-style: none;
    display: inline-block;
  }
  #menu li a{
    text-decoration: none;
    position: relative;
    color: #313131;
    font-size: 20px;
    font-weight: 50;
    font-family: sans-serif;
    display: block;
    overflow: hidden;
    transition: 0.3s all;
    padding: 0px 5px;
  }
  #menu li a:before{
    content: '';
    width: 30px;
    position: absolute;
    border-bottom: 2px solid whitesmoke;
    bottom: 0;
    right: 350px;
    transition: 0.3s all;
  }
  #menu li a:hover:before{
    right: 0;
  }
  </style>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/reservasiuser.css">
    <title><?= $title ?></title>
  </head>
  <body>

  <nav class="navbar fixed-top navbar-expand-lg navbar-light" style="background-image: linear-gradient(#8B0000, brown);">
        <a class="navbar-brand" href="#" style="margin-left:200px;color:whitesmoke"><i class="fa fa-building-o" aria-hidden="true" style="margin-right:5px;"></i>Roomkita</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse">
        <ul class="navbar-nav" id="menu">
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>home_user/home_user_login" style="color:whitesmoke">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url(); ?>kamar_user/user_login" style="color:whitesmoke">Kamar</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
            Detail
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="background-image: linear-gradient(#013440, #025059);">
            <!--a class="dropdown-item" href="<//?= base_url(); ?>user/detail_kamar">Detail Kamar</a-->
            <a class="dropdown-item" href="<?= base_url(); ?>user/detail_user" style="color:whitesmoke">Detail Pengunjung</a>
            <a class="dropdown-item" href="<?= base_url(); ?>user/laporan_pdf" style="color:whitesmoke">Cetak Reservasi</a>
            <!--a class="dropdown-item" href="#"></a-->
          </div>
        </li>

          <li class="nav-item dropdown" style="margin-left: 500px">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:whitesmoke">
            Hello <?= $this->session->userdata('nama');?>
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink" style="color:whitesmoke">
            <a class="dropdown-item" href="<?= base_url(); ?>login/logout">Logout</a>
          </div>
        </li>
        </ul>
    </div>
</nav>