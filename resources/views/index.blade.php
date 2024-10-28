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
            <a class="nav-link active" href="{{ route('index') }}">Ana Sayfa</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('property-grid') }}">Referanslarımız</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('contact') }}">İletişim</a>
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


  <!--/ Carousel Star /-->
  <div class="intro intro-carousel">
    <div id="carousel" class="owl-carousel owl-theme">
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-3.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                    <p class="intro-title-top">
                      <br> </p>
                    <h1 class="intro-title mb-4">
                      <span class="color-b">YENİ </span> Tasarımlar
                      <br> Olive Road Two</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">sadece 5.0000 tlden başlayan fiyatlarla</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-2.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                  
                    <h1 class="intro-title mb-4">
                      <span class="color-b">YENİ </span> Tasarımlar
                      <br> Venda Road Five</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">$ 10.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel-item-a intro-item bg-image" style="background-image: url(img/slide-1.jpg)">
        <div class="overlay overlay-a"></div>
        <div class="intro-content display-table">
          <div class="table-cell">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="intro-body">
                   
                    <h1 class="intro-title mb-4">
                      <span class="color-b">YENİ </span> Tasarımlar
                      <br> Roan Road One</h1>
                    <p class="intro-subtitle intro-price">
                      <a href="#"><span class="price-a">14.000</span></a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--/ Carousel end /-->

  <!--/ Hakkımızda /-->
  

<section class="section-services section-t8">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="title-wrap d-flex justify-content-between">
          <div class="title-box">
            <h2 class="title-a">HAKKIMIZDA</h2>
          </div>
        </div>
      </div>
    <div class="property-description">
      <p class="description color-text-a">
        Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit
        neque, auctor sit amet
        aliquam vel, ullamcorper sit amet ligula. Cras ultricies ligula sed magna dictum porta.
        Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt
        nibh pulvinar quam id dui posuere blandit.
      </p>
      <p class="description color-text-a no-margin">
        Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec rutrum congue leo eget
        malesuada. Quisque velit nisi,
        pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada.
      </p>
    </div>
   
  </div>
</div>
<br><br> <br><br><br><br><br>
  <!--/ Property Star /-->
  <div>
<section class="property-grid grid">
    <div class="container">
        <h3>Projelerimiz</h3><br>
        <div class="row">
        @foreach($properties as $property)
                <div class="col-md-4 mb-4">
                    <div class="card-box-a card-shadow">
                        <a href="{{ route('property-single', ['id' => $property->id]) }}" class="img-box-a">
                            @php
                                // Fotoğraf URL'sini oluşturun
                                $imageUrl = 'path/to/default-image.jpg'; // Varsayılan resim

                                if ($property->photo_urls) {
                                    $firstPhoto = is_array($property->photo_urls) ? $property->photo_urls[0] : $property->photo_urls;
                                    $imageUrl = asset('storage/' . $firstPhoto); // storage veya public dizini altında ise
                                }
                            @endphp
                            <div class="background-image" style="background-image: url('{{ $imageUrl }}');"></div>
                        </a>
                        <div class="card-overlay">
                            <div class="card-overlay-a-content">
                                <h2 class="card-title-a">{{ $property->label }}</h2>
                                <a href="{{ route('property-single', ['id' => $property->id]) }}" class="more-info">Daha Fazla Bilgi İçin Tıklayın</a>
                            </div>
                        </div>
                        <!-- "Daha Fazlası" bağlantısını kartın altına ekleyin -->

                    </div>
                </div>
                @endforeach
</div>
<!-- Pagination links -->


</section>
</div>>
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
                                            <li class="color-a"><span class="color-text-a">Telefon: </span> {{ $item->tel_number1 }}</li>
                                            <li class="color-a"><span class="color-text-a">İkinci Telefon: </span> {{ $item->tel_number2 }}</li>
                                            <li class="color-a"><span class="color-text-a">Email: </span> {{ $item->mail }}</li>
                                            <li class="color-a"><span class="color-text-a">Adres: </span> {{ $item->address }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </section>
                    <div class="socials-a text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li class="list-inline-item"><a href="#"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
  <!--/ Footer End /-->
  <div id="preloader"></div>

<!-- JavaScript Libraries -->
<script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- Diğer gerekli JavaScript dosyaları ekleyin -->
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</blade.php>