<!doctype html>
<html lang="en">

<head>
    <link rel='manifest' href='./manifest.webmanifest'>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <meta name="theme-color" content="#118AB2">
    <title>{{ $title }}</title>
</head>

<body>
    @include('layouts.nav')
    @include('hero')
    <div class="container mt-2 px-3">
        @yield('content')
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="index.js" type="module"></script>
</body>

</html>
