<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Property Details - HidroLift Estate Agency</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/favicon.png') }}" rel="icon">
    <link href="{{ asset('img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <style>
        /* Genel stiller */
        body {
            padding-top: 20px;
        }
        .navbar-social {
      display: flex;
      align-items: center;
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
    .navbar-social a:hover {
      color: #007bff;
    }
        .navbar {
            margin-bottom: 20px;
        }

        .property-image {
            max-width: 100%;
            height: auto;
        }

        .property-details {
            margin-top: 20px;
        }

        .property-details h2 {
            margin-bottom: 20px;
        }

        .slider {
            position: relative;
            max-width: 800px;
            margin: auto;
            overflow: hidden;
        }

        .slider img {
            width: 100%;
            height: auto;
            display: block;
        }

        .arrow-left, .arrow-right {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: #333;
            color: #fff;
            padding: 10px;
            border-radius: 50%;
            cursor: pointer;
        }

        .arrow-left {
            left: 10px;
        }

        .arrow-right {
            right: 10px;
        }

        .arrow-left:hover, .arrow-right:hover {
            background: #555;
        }
    </style>
</head>

<body>

    <!-- Navbar -->
    <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
        <div class="container">
            <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault">
                <span></span>
                <span></span>
                <span></span>
            </button>
            <a class="navbar-brand text-brand" href="{{ route('index') }}">Hidro<span class="color-b">Lift</span></a>
            <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link " href="{{ route('index') }}">Ana Sayfa</a></li>
                    <li class="nav-item"><a class="nav-link active" href="{{ route('property-grid') }}">Referanslarımız</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">İletişim</a></li>
                </ul>
                <div class="navbar-contact d-flex align-items-center ml-auto">
          <!-- Sosyal medya ikonları -->
          <div class="navbar-social">
            <ul class="list-inline">
              <li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
              <li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            </ul>
            <br>
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
<br><br><br><br><br><br><br><br>
    <!-- Property Details -->
    <div class="container">
     

        <div class="property-details">
            <h2>{{ $property->label }}</h2>
            <div class="slider">
                <!-- Sol ok -->
                <div class="arrow-left">
                    <i class="fa fa-chevron-left"></i>
                </div>

                <!-- Görüntülenecek Fotoğraflar -->
                @php
                    $photos = is_array($property->photo_urls) ? $property->photo_urls : [$property->photo_urls];
                @endphp
                @foreach($photos as $photo)
                    <img src="{{ asset('storage/' . $photo) }}" alt="{{ $property->label }}">
                @endforeach

                <!-- Sağ ok -->
                <div class="arrow-right">
                    <i class="fa fa-chevron-right"></i>
                </div>
            </div>

            <br><br><br><br><br>
            <h4>>Açklama:<br/> {{ $property->text }}</h4>
        </div>

    </div>

    <!-- JavaScript to handle image switching -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const images = document.querySelectorAll('.slider img');
            const totalImages = images.length;
            let currentIndex = 0;

            function showImage(index) {
                images.forEach((img, i) => {
                    img.style.display = (i === index) ? 'block' : 'none';
                });
            }

            document.querySelector('.arrow-left').addEventListener('click', function() {
                currentIndex = (currentIndex > 0) ? currentIndex - 1 : totalImages - 1;
                showImage(currentIndex);
            });

            document.querySelector('.arrow-right').addEventListener('click', function() {
                currentIndex = (currentIndex < totalImages - 1) ? currentIndex + 1 : 0;
                showImage(currentIndex);
            });

            // Show the first image initially
            showImage(currentIndex);
        });
    </script>

</body>
</html>
