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

    @include('frontend.includes.headerAwal')
    @yield('content')

    @include('frontend.includes.footer')


    <!-- script -->
    @stack('before-scipt')
    @include('frontend.includes.script')
    @stack('after-script')

</body>