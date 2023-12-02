<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<!-- Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function() {
        // Tambahkan event listener pada setiap tombol delete
        document.querySelectorAll('.delete').forEach(function(button) {
            button.addEventListener('click', function() {
                var itemId = this.getAttribute('data-id');

                // Tampilkan SweetAlert konfirmasi
                Swal.fire({
                    title: 'Apakah Anda Ingin Menghapus Data Ini?',
                    text: 'Data Yang Terhapus Akan Menghilang',
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete !'
                }).then((result) => {

                    // Jika user mengkonfirmasi, kirim form delete
                    if (result.isConfirmed) {
                        Swal.fire({
                            title: "Deleted!",
                            text: "Anda Berhasil",
                            icon: "success"
                        });
                        document.getElementById('delete-form-' + itemId).submit();

                    }
                });
            });
        });
    });
</script>