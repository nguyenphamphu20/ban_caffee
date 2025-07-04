<!DOCTYPE html>
<html lang="vi" class="{{session('theme','light')}}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield("title","Trang Chủ")</title>
    @vite(["resources/css/app.scss","resources/js/app.js"])
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="icon" type="image/png" href="{{asset('./favicon/favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('./favicon/favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('./favicon/favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('./favicon/apple-touch-icon.png')}}" />
    <meta name="apple-mobile-web-app-title" content="MyWebSite" />
    <link rel="manifest" href="{{asset('./favicon/site.webmanifest')}}" />
</head>

<body>
    {{-- header --}}
    <header class="header py-3 fixed-top">
        @include("partials.header")
    </header>

    <section class="carousel">
        <div class="container">
            @include("partials.carousel")
        </div>
    </section>

    <section class="category">
        <div class="container">
            @include("partials.category")
        </div>
    </section>

</body>

</html>