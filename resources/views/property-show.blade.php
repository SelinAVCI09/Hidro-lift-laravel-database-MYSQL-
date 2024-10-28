<!-- Property Show Section -->
<section class="property-show">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-box-a card-shadow">
          <div class="img-box-a">
            
  <title>HİDROLİFT</title>
            <!-- Property image section -->
            @php
                $backgroundUrl = asset($property->photo_urls[0] ?? 'default-image-url');
            @endphp
            <div class="background-image" style="background-image: url('{{ $backgroundUrl }}');"></div>
          </div>
          <div class="card-overlay">
            <div class="card-overlay-a-content">
              <h2 class="card-title-a">{{ $property->label }}</h2>
            </div>
          </div>
        </div>
        <!-- Property details section -->
        <div class="property-show-container">
          <h2 class="property-title">{{ $property->label }}</h2>
          <div class="property-description">
            <!-- Description or additional details about the property can go here -->
            <p>Buraya mülk hakkında daha fazla bilgi ekleyebilirsiniz.</p>
          </div>
          <!-- Additional images -->
          <div class="property-images">
            @foreach($property->photo_urls as $url)
              <img src="{{ asset($url) }}" class="property-image" alt="{{ $property->label }}">
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<style>
    /* Bileşenin temel stilini tanımla */
    .property-show-container {
        padding: 20px;
        margin: 10px;
        border: 1px solid #ccc;
        border-radius: 8px;
        background-color: #f9f9f9;
    }

    .property-title {
        font-size: 1.5em;
        margin-bottom: 10px;
        color: #333;
    }

    .property-description {
        font-size: 1em;
        color: #666;
    }

    .property-image {
        max-width: 100%;
        height: auto;
        border-radius: 5px;
        margin-bottom: 10px;
    }

    .background-image {
        width: 100%;
        height: 400px; /* Genişlik ve yükseklik ayarlarını ihtiyaca göre düzenleyin */
        background-size: cover;
        background-position: center;
    }

    .card-box-a {
        border: 1px solid #e0e0e0;
        border-radius: 8px;
        overflow: hidden;
        transition: transform 0.3s ease;
    }
    .card-box-a:hover {
        transform: scale(1.05);
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
    .card-title-a {
        font-size: 18px;
        margin-bottom: 0;
    }
</style>
