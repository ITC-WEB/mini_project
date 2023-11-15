<!DOCTYPE html>
<html lang="en">

<head>

    <title>@yield('title') | ITC-Trans</title>
    @stack('before-style')
    <!-- ambil style -->
    @include('admin.includes.style')
    @stack('after-style')

</head>

<body>
    @include('admin.includes.header')
    @include('admin.includes.sidebar')
    @yield('content')

    @include('admin.includes.footer')


    <!-- script -->
    @stack('before-scipt')
    @include('admin.includes.scipt')
    @stack('after-script')

    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- End custom js for this page-->
</body>

</html>