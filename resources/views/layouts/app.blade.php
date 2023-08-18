<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/sass/app.scss')
    <title>@yield('title')</title>
</head>

<body>
    <div class="wrapper vh-100 d-flex flex-column">
        @include('layouts.header')

        <main class="flex-grow-1">
            @yield('content')
        </main>

        @include('layouts.footer')
        @include('layouts.flash')
    </div>
    @vite('resources/js/app.js')
</body>

</html>
