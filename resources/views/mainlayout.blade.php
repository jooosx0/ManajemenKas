<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url('{{ asset('images/bg.jpg') }}'); /* Ganti dengan path gambar Anda */
            background-size: cover; /* Menutupi seluruh area */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Menghindari pengulangan gambar */
            min-height: 100vh; /* Memastikan tinggi minimal sesuai viewport */
        }
    </style>
</head>
<body>
    
    <!-- Main Content -->
    <div class="container mt-4">
        @yield('maincontent') <!-- Konten utama akan dimasukkan di sini -->
    </div>
    @include('components.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>