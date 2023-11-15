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
    @push('script')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <script type="text/javascript">
        document.addEventListener('DOMContentLoaded', function() {
            // Tambahkan event listener pada setiap tombol delete
            document.querySelectorAll('.delete').forEach(function(button) {
                button.addEventListener('click', function() {
                    var itemId = this.getAttribute('data-id');

                    // Tampilkan SweetAlert konfirmasi
                    Swal.fire({
                        title: 'Yakin Ingin Menghapus?',
                        text: 'Data Yang Dihapus tidak dapat di kembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes, delete it!'
                    }).then((result) => {
                        // Jika user mengkonfirmasi, kirim form delete
                        if (result.isConfirmed) {
                            document.getElementById('delete-form-' + itemId).submit();
                        }
                    });
                });
            });
        });
    </script>
    @endpush

    <!-- page-body-wrapper ends -->
    <!-- container-scroller -->
    <!-- End custom js for this page-->
</body>

</html>