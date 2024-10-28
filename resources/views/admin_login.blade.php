<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Girişi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #92a5bd;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ddd;
            border-radius: 4px;
        }
        button {
            background-color: #92a5bd;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #7a8a9d;
        }
        .message {
            color: red;
            margin: 10px 0;
        }
    </style>
</head>
<body>

    <div class="container">
        @if (session('message'))
            <p class="message">{{ session('message') }}</p>
        @endif
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf
            <div>
                <label for="username">Kullanıcı Adı:</label>
                <input type="text" name="username" id="username" required>
            </div>
            <div>
                <label for="password">Şifre:</label>
                <input type="password" name="password" id="password" required>
            </div>
            <button type="submit">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
