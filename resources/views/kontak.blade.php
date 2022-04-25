@extends('_layout.default')

@section('content')

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Baker Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Baker - v4.7.0
  * Template URL: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

  <div class="container">
    <div class="text-center mb-3">
      <h1><B>Kontak Kami</B></h1>
    </div>

    <div class="row">
      <div class="col-sm-4">
        <div class="item-text">
          <div class="item-text__title">Alamat</div>
          <div class="item-text__main">
            <p>Alamat lengkap sekolah</p>
          </div>
        </div>
        <div class="item-text">
          <div class="item-text__title">Email</div>
          <div class="item-text__main">
            <p>mail@website.com</p>
          </div>
        </div>
        <div class="item-text">
          <div class="item-text__title">Whatsapp</div>
          <div class="item-text__main">
            <p>+628xxxxxxx</p>
          </div>
        </div>
      </div>
      <div class="col-sm-8">

        <h5>Kirim pesan</h5>

        <div class="mb-3">Halo, Silahkan jika ada yang ditanyakan atau untuk mengirim kritik dan saran</div>

        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="name" name="name" placeholder="Nama Lengkap">
          <label for="name">Nama Lengkap</label>
        </div>
        <div class="form-floating mb-3">
          <input type="text" class="form-control" id="phone" name="phone" inputmode="tel"
            placeholder="Nomor Telp/ WhatsApp">
          <label for="phone">Nomor Telp/ WhatsApp</label>
        </div>
        <div class="form-floating mb-3">
          <textarea class="form-control" placeholder="Isi Pesan" id="isi-pesan" style="height: 200px"></textarea>
          <label for="isi-pesan">Isi Pesan</label>
        </div>
        <div class="mb-3">
          <button type="submit" class="btn btn-warning">Kirim Pesan</button>
        </div>

      </div>

    </div>
  </div>

  <div class="ratio ratio-16x9 mt-4" style="--bs-aspect-ratio: 300px;">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15819.549735348359!2d110.9519918!3d-7.5872298!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe9c84052b95a73cb!2sPT.%20Kusuma%20Kreasi%20Utama!5e0!3m2!1sen!2sid!4v1644391270549!5m2!1sen!2sid"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
  </div>
@endsection
