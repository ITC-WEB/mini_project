<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>@yield('title') | ITC-Trans</title>
    @stack('prepend-style')
    @include('admin.includes.style')
    @stack('addon-style')


</head>

<body>
    @include('admin.includes.header')
    @include('admin.includes.sidebar')
    @yield('content')

    @include('admin.includes.footer')
    <!-- script -->
    @include('admin.includes.sweetalert')
    @stack('prepend-script')
    @include('admin.includes.script')
    @stack('addon-script')


    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- End custom js for this page-->
</body>

</html>