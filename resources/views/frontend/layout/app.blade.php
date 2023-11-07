<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title')-ITC-Trans</title>

    @stack('before-style')
    <!-- ambil style -->
    @include('frontend.includes.style')
    @stack('after-style')


</head>

<body>

    @include('frontend.includes.header')
    @yield('content')

    @include('frontend.includes.footer')

</body>