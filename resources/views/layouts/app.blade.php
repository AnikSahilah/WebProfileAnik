<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Website Profil</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <!-- Tambahkan header sesuai kebutuhan -->
    </header>

    <div class="container">
        @yield('content')
    </div>

    <footer>
        <!-- Tambahkan footer sesuai kebutuhan -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
