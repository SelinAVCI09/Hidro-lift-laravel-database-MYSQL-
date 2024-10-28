<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>İş Düzenle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        h1 {
            margin-bottom: 20px;
            color: #333;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input, .form-group textarea, .form-group select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        .form-group button {
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            background-color: #28a745;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        .form-group button:hover {
            background-color: #218838;
        }
        .form-group a {
            display: inline-block;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .form-group a:hover {
            text-decoration: underline;
        }
        .photo-preview img {
            max-width: 100px;
            height: auto;
            margin-right: 10px;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>İş Düzenle</h1>
        <form action="{{ route('update_works', ['id' => $work->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Gizli Admin ID Alanı -->
            <input type="hidden" name="admin_id" value="1">

            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" id="text" name="text" value="{{ old('text', $work->text) }}" required>
            </div>
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" id="label" name="label" value="{{ old('label', $work->label) }}" required>
            </div>
            <div class="form-group">
                <label for="photo_urls">Mevcut Fotoğraflar</label>
                <div class="photo-preview">
                    @if($work->photo_urls)
                        @php
                            $photoUrls = json_decode($work->photo_urls, true);
                        @endphp
                        @if(is_array($photoUrls) && count($photoUrls) > 0)
                            @foreach($photoUrls as $photoUrl)
                                <img src="{{ asset('storage/' . $photoUrl) }}" alt="Photo">
                            @endforeach
                        @else
                            <p>No photos available.</p>
                        @endif
                    @else
                        <p>No photos available.</p>
                    @endif
                </div>
            </div>
            <div class="form-group">
                <label for="new_photos">Yeni Fotoğraflar (Seçiniz)</label>
                <input type="file" id="new_photos" name="photos[]" multiple>
                <small>Mevcut fotoğraflara yeni fotoğraflar eklemek için yeni fotoğraflar seçin. (Maks. 2 MB,PNG)</small>
            </div>
            <div class="form-group">
                <button type="submit">Güncelle</button>
            </div>
            <div class="form-group">
                <a href="{{ route('admin_home') }}">Geri Dön</a>
            </div>
        </form>
    </div>
</body>
</html>
