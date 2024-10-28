<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Works Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Stil ekleme -->
</head>
<body>
    <div class="container">
        <h1>İşler Sayfası</h1>
        <a href="{{ route('admin_home') }}" class="btn btn-primary mb-3">Ana Sayfaya Dön</a>
        
        <table class="table">
            <!-- İş tablosu -->
            @foreach($works as $work)
                <tr>
                    <td>{{ $work->id }}</td>
                    <td>{{ $work->text }}</td>
                    <td>
                        <!-- İş düzenleme ve silme butonları -->
                    </td>
                </tr>
            @endforeach
        </table>

        <!-- Sayfalama -->
        <nav>
            <ul class="pagination">
                @for($i = 1; $i <= $totalPages; $i++)
                    <li class="page-item {{ $page == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ route('works_page', ['page' => $i]) }}">{{ $i }}</a>
                    </li>
                @endfor
            </ul>
        </nav>
    </div>
</body>
</html>
