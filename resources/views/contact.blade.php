<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>HİDROLİFT</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <style>
    .card-title-a {
      font-size: 18px;
      margin-bottom: 0;
      color: #fff; /* Beyaz renk */
    }
    .card-box-a {
      border: 1px solid #e0e0e0;
      border-radius: 8px;
      overflow: hidden;
      transition: transform 0.3s ease;
    }

    .card-box-a:hover {
      transform: scale(1.05);
      color: #fff; /* Beyaz renk */
    }

    .img-box-a {
      position: relative;
      overflow: hidden;
    }

    .more-info {
      display: block;
      margin-top: 10px;
      font-size: 16px;
      color: #dcdcdc; /* Beyaza yakın gri */
      text-decoration: none;
    }

    .background-image {
      width: 100%;
      height: 200px;
      background-size: cover;
      background-position: center;
    }

    .card-overlay {
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background: rgba(0, 0, 0, 0.5);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .card-box-a:hover .card-overlay {
      opacity: 1;
    }

    .card-overlay-a-content {
      color: #fff;
      position: absolute;
      bottom: 0;
      left: 0;
      right: 0;
      padding: 20px;
      text-align: center;
    }

    .navbar-social {
      display: flex;
      align-items: center;
    }

    .navbar-social a {
      color: #333;
      margin-left: 15px;
      font-size: 18px;
    }

    .navbar-social a:hover {
      color: #007bff;
    }

    .navbar-contact {
      display: flex;
      align-items: center;
      margin-left: auto; /* Sağ kenara yaslamak için */
    }

    .navbar-contact .phone-number {
      margin-left: 15px;
      font-size: 14px;
    }

    .navbar-contact a {
      color: #333;
      margin-left: 15px;
      font-size: 18px;
      text-decoration: none;
    }

    .navbar-contact a:hover {
      color: #007bff;
    }

    .navbar-brand {
      flex-grow: 1;
    }
  </style>
</head>

<body>
  <div class="click-closed"></div>

  <!-- Nav HTML Kodları -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <a class="navbar-brand text-brand" href="{{ route('index') }}">Hidro<span class="color-b">Lift</span></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-md-none" data-toggle="collapse"
        data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link " href="{{ route('index') }}">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('property-grid') }}">Referanslarımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="{{ route('contact') }}">İletişim</a>
          </li>
        </ul>
        <div class="navbar-contact d-flex align-items-center ml-auto">
          <!-- Sosyal medya ikonları -->
          <div class="navbar-social">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
          </div>
          <!-- Telefon numaraları -->
          @foreach($information as $item)
            <div class="phone-number">
              <p>Telefon: {{ $item->tel_number1 }}</p>
              <p>İkinci Telefon: {{ $item->tel_number2 }}</p>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </nav>
</body>




  <!--/ Intro Single star /-->
  <section class="intro-single">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-lg-8">
          <div class="title-single-box">
            <h1 class="title-single">İLETİŞİMDE KALALIM</h1>
            <span class="color-text-a">Bizler için iletişimde kalmak çok önemli. Bize ulaşmak isterseniz:</span>
          </div>
        </div>
        <div class="col-md-12 col-lg-4">
          <nav aria-label="breadcrumb" class="breadcrumb-box d-flex justify-content-lg-end">
            <ol class="breadcrumb">
         
            </ol>
          </nav>
        </div>
      </div>
    </div>
  </section>
  <!--/ Intro Single End /-->

  <!-- Contact Map -->
  <section class="contact-map">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3110.689162207849!2d-122.39212668469437!3d37.788574479757165!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8085809d2d0f7d67%3A0x49c7e3b9baf6d0ae!2s1601%20Marina%20Blvd%2C%20San%20Francisco%2C%20CA%2094101%2C%20United%20States!5e0!3m2!1sen!2str!4v1635368145698!5m2!1sen!2str" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Contact Map End /-->
<br><br><br><br>
  <footer>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <section class="section-table section-t8">
                    <div class="row justify-content-center">
                        @foreach($information as $item)
                            <div class="col-sm-12 col-md-4 d-flex justify-content-center mb-4">
                                <div class="widget-a">
                                    <div class="w-header-a">
                                        <h3 class="w-title-a text-brand">HidroLift</h3>
                                    </div>
                                    <div class="w-footer-a">
                                        <ul class="list">
                                            <li class="color-a">
                                                <span class="color-text-a">Telefon </span> {{ $item->tel_number1 }}
                                            </li>
                                            <li class="color-a">
                                                <span class="color-text-a">İkinci Telefon</span> {{ $item->tel_number2 }}
                                            </li>
                                            <li class="color-a">
                                                <span class="color-text-a">Email </span> {{ $item->mail }}
                                            </li>
                                            <li class="color-a">
                                                <span class="color-text-a">Adres </span> {{ $item->address }}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </section>
                <div class="socials-a text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-pinterest-p" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                <i class="fa fa-dribbble" aria-hidden="true"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="copyright-footer text-center">
                    <p class="copyright color-text-a">
                        &copy; Copyright
                        <span class="color-a">HidroLift</span> Bütün haklar saklanmıştır.
                    </p>
                </div>
                <div class="credits text-center">
                    <!-- Additional credits if needed -->
                </div>
            </div>
        </div>
    </div>
  </footer>

  <style>
    .section-table {
        text-align: center;
    }

    .w-header-a {
        margin-top: 0; /* Başlığın üstündeki boşluğu kaldırır */
    }

    .socials-a ul {
        justify-content: center;
    }

    .copyright-footer,
    .credits {
        margin-top: 20px;
    }
    
    .contact-map .map iframe {
        border: none;
    }
  </style>

  <a href="#" class
