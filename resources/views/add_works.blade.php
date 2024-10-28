<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yeni İş Ekle</title>
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
        .form-group input, .form-group textarea {
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
    </style>
</head>
<body>
    <div class="container">
        <h1>Yeni İş Ekle</h1>
        <form action="{{ route('store_works') }}" method="POST" enctype="multipart/form-data">
            @csrf
            
            <input type="hidden" name="admin_id" value="1">
            <div class="form-group">
                <label for="text">Text</label>
                <input type="text" id="text" name="text" required>
            </div>
            <div class="form-group">
                <label for="label">Label</label>
                <input type="text" id="label" name="label" required>
            </div>
            <div class="form-group">
                <label for="photos">Fotoğraf Yükle</label>
                <input type="file" id="photos" name="photos[]" multiple required>
            </div>
            <div class="form-group">
                <button type="submit">Kaydet</button>
            </div>
            <div class="form-group">
                <a href="{{ route('admin_home') }}">Geri Dön</a>
            </div>
        </form>
    </div>
</body>
</html>