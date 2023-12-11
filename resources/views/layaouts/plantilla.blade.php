<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .imagen-circular {
            display: block;
            margin: auto;
            max-width: 100%;
            border-radius: 50%;
        }
    </style>
</head>
<body>
    <div align="center"><img class="imagen-circular" src="images/cinepolis.jpg" width="100px" alt="Cinepolis"></div>
    <br>
    <br>

    @yield('content')
</body>
</html>