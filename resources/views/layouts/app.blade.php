<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&family=Lemonada:wght@300;700&family=Marhey:wght@300;400;600&display=swap" rel="stylesheet">
        
    <!-- Styles -->
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/style.css" />
    <link rel="icon" type="image/x-icon" href="/icons/brand.svg">
    <title>@yield('title')</title>
    </head>
    <body>
        <div class="container-fluid">
            @yield('content')
        </div>

        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
