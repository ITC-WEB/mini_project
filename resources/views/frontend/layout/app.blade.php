<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title')</title>

    @stack('prepend-style')
    @include('frontend.includes.style')
    @stack('addon-style')

</head>

<body>

    @include('frontend.includes.navbar')
    @yield('content')
    @include('frontend.includes.footer')

    @stack('prepend-script')
    @include('frontend.includes.scripts')
    @stack('addon-scripts')

</body>