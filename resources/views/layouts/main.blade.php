<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        @vite(['resources/css/index.css','resources/js/app.js'])
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="d-flex">
            <x-sidebar></x-sidebar>
            <div class="d-flex flex-column w-100">
               <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="p-3">
                   
                  </nav>
                @yield('content')
            </div>
        </div>
    </body>
</html>
