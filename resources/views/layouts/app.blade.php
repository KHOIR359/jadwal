<!doctype html>
<html lang="en">

<head>
    <link rel='manifest' href='./manifest.webmanifest'>
    <!-- Required meta tags -->
    <meta name="theme-color" content="#118ab2">
    <meta name="description" content="Pengingat Jadwal Terbaik Dibuat Oleh Abdul Khoir">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preload" href="fonts\BalooChettan2-Regular.ttf" as="font" crossorigin="anonymous" />
    <link rel="preload" href="fonts\Roboto-Regular.ttf" as="font" crossorigin="anonymous" />
    <link href="css/style.css" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    <div class="body">

        @include('layouts.nav')
        {{-- @include('hero') --}}
        <div class="container mt-2 px-3">
            @yield('content')
        </div>
    </div>


    <script src="js/bootstrap.min.js"></script>
    <script src="index.js" type="module"></script>
</body>

</html>
