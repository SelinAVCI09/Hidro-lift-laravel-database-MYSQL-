<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5; /* Genel arka plan rengi */
            color: #333; /* Yazı rengi */
        }

        .container {
            background-color: #fff; /* İçerik arka plan rengi */
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1, h2 {
            color: #333; /* Başlık rengi */
        }

        .admin-header {
            background-color: #e0e0e0; /* Admin başlığı arka plan rengi */
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .btn-primary {
            background-color: #28a745; /* Yeşil arka plan rengi */
            border-color: #28a745;
        }

        .btn-primary:hover {
            background-color: #218838;
            border-color: #1e7e34;
        }

        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
        }

        .btn-danger {
            background-color: #dc3545;
            border-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }

        .table {
            margin-bottom: 0;
        }

        .table thead th {
            background-color: #343a40;
            color: #fff;
            border-bottom: 2px solid #454d55;
        }

        .table tbody tr:nth-of-type(even) {
            background-color: #f2f2f2;
        }

        .table tbody tr:hover {
            background-color: #e9ecef;
        }

        .table img {
            border-radius: 4px;
            max-width: 100%; /* Resimlerin genişliğini sınırla */
            height: auto; /* Yüksekliği otomatik ayarla */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="admin-header">
            <h1>Admin</h1>
        </div>

        <h2>BİLGİLER</h2>
        <a href="{{ route('create_information') }}" class="btn btn-primary mb-3">Bilgi Ekle</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Phone Number 1</th>
                    <th>Phone Number 2</th>
                    <th>Address</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($information as $info)
                    <tr>
                        <td>{{ $info->id }}</td>
                        <td>{{ $info->tel_number1 }}</td>
                        <td>{{ $info->tel_number2 }}</td>
                        <td>{{ $info->address }}</td>
                        <td>{{ $info->mail }}</td>
                        <td>
                            <a href="{{ route('edit_information', $info->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('delete_information') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $info->id }}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h2>İŞLER</h2>
        <a href="{{ route('create_works') }}" class="btn btn-primary mb-3">İş Ekle</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Text</th>
                    <th>Label</th>
                    <th>Photos</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($works as $work)
                    <tr>
                        <td>{{ $work->id }}</td>
                        <td>{{ $work->text }}</td>
                        <td>{{ $work->label }}</td>
                        <td>
                            @if($work->photo_urls)
                                @php
                                    $photoUrls = json_decode($work->photo_urls, true);
                                @endphp
                                @if(is_array($photoUrls))
                                    @foreach($photoUrls as $photoUrl)
                                        <img src="{{ asset('storage/' . $photoUrl) }}" alt="Photo" width="100" height="100">
                                    @endforeach
                                @endif
                            @endif
                        </td>
                        <td>
                            <a href="{{ route('edit_works', $work->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('delete_works') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" name="id" value="{{ $work->id }}">
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
