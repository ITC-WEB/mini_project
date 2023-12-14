@extends('frontend.layout.suksesapp')

@section('title')
statuscekout
@endsection

@section('content1')
<div class="container">
    <nav class="row navbar navbar-expand-lg navbar-light bg-white">
        <div class="navbar-nav ml-auto mr-auto mr-sm-auto mr-lg-0 mr-md-auto">
            <a class="navbar-brand" href="index.html">
                <img src="frontend/images/logo itc.png" alt="" />
            </a>
        </div>
        <ul class="navbar-nav mr-auto d-none d-lg-block">
            <li>
                <span class="text-muted">| &nbsp; Beyond the explorer of the world</span>
            </li>
        </ul>
    </nav>
</div>
<main>
    <div class="container ">
        <div class="card card-status shadow mx-auto mt-4 col-lg-12 col-md-6 col-sm-6">
            <div class=" st text-center mt-4 mb-4">
                <img class="bri" src="" alt="" />
                <table class="statuscekout text-left mt-5 mb-5 mx-auto center-table justify-content-around">
                    <tr>
                        <th>Nomor Rekening</th>
                        <td class="text-left">
                            <span id="nomorRekening">33345 221 2213 221</span>
                            <i class="fa fa-copy copy-icon" onclick="copyTextToClipboard('nomorRekening')"></i>
                        </td>
                    </tr>
                    <tr>
                        <th>Atas Nama</th>
                        <td class="text-left">{{Auth::user()->name}}</td>
                    </tr>
                    <tr>
                        <th>Total Pembayaran</th>
                        <td class="text-left harga">{{$peminjaman->biaya}}</td>
                    </tr>
                </table>
                <h1 class="keterangan font-weight-bold mt-5, text-danger">
                    Silahkan lakukan pembayaran, Lalu Screen Capture <br> Bukti Pembayaran.
                </h1>
            </div>
        </div>
        <form action="/update-pembayaran" id="myForm" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
            <div class="input mt-4 mx-auto">
                <label for="inputSIM" class="font-weight-medium"><span class="text-danger">*</span></label> Silahkan Unggah Bukti Pembayaran</label>
                <div class="custom-file">
                    <input type="file" name="bukti" class="custom-file-input" id="inputSIM" accept=".jpg, .jpeg, .png, .pdf" />
                    <label class="custom-file-label" for="inputSIM">img.png</label>
                </div>

                <div class="form-group form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleUploadButton()">
                    <label class="form-check-label" for="exampleCheck1">Saya sudah melakukan Pembayaran dan mengunggah Bukti Pembayaran</label>
                </div>


                <div class="btn-container">
                    <button type="submit" class="btn btn-block btn-primary mt-4" id="uploadButton" disabled>
                        <!-- <span id="loadingIndicator" style="display:none;">
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    </span> -->
                        Kirim</button>
                </div>
                <div>

                </div>
        </form>

    </div>
    </div>
    </div>
    </div>
</main>


</body>
@endsection

@push('addon-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/accounting.js/0.4.1/accounting.min.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan semua elemen dengan kelas 'harga'
        const hargaElements = document.querySelectorAll('.harga');

        // Mengubah setiap elemen dengan kelas 'harga' menjadi format uang Rupiah
        hargaElements.forEach(function(elem) {
            // Memastikan nilai dapat diubah menjadi angka
            const numericValue = parseFloat(elem.textContent);

            if (!isNaN(numericValue)) {
                // Menggunakan accounting.js untuk memformat angka
                elem.textContent = accounting.formatMoney(numericValue, {
                    symbol: 'Rp ',
                    precision: 0,
                    thousand: '.',
                    decimal: ','
                });
                console.log(numericValue)
            } else {
                console.error('Nilai tidak valid untuk elemen dengan kelas "harga"');
            }
        });

        var uploadButton = document.getElementById('uploadButton');

        if (uploadButton) {
            console.log("q");
            uploadButton.addEventListener("click", function(e) {
                // Sembunyikan tombol dan tampilkan animasi loading
                uploadButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
                // loadingIndicator.style.display = 'inline-block';
                uploadButton.setAttribute('disabled', 'disabled');
                e.preventDefault()

                Swal.fire({
                    title: 'Pesanan Berhasil Terkirim',
                    html: '<p>Silahkan menghubungi Admin kami bahwa Anda sudah melakukan Pembayaran!</p>',
                    icon: 'success',
                }).then(function(result) {
                    console.log(result);
                    if (result.isConfirmed) {
                        document.getElementById("myForm").submit()
                        // Kembalikan tampilan tombol
                        console.log("t");
                        uploadButton.innerHTML = 'Kirim';
                        loadingIndicator.style.display = 'none';
                        uploadButton.removeAttribute('disabled');

                    }

                })
            })
        }
    });
</script>
<script>
    function copyTextToClipboard(elementId) {
        var textToCopy = document.getElementById(elementId);
        var range = document.createRange();
        range.selectNode(textToCopy);
        window.getSelection().removeAllRanges();
        window.getSelection().addRange(range);
        document.execCommand("copy");
        window.getSelection().removeAllRanges();
    }
</script>

<script>
    var AlertSukses = document.getElementById('AlertSukses');
    var uploadButton = document.getElementById('uploadButton');
    var loadingIndicator = document.getElementById('loadingIndicator');

    AlertSukses.style.display = 'none';

    function toggleUploadButton() {
        var checkbox = document.getElementById('exampleCheck1');

        // Jika checkbox dicentang, aktifkan tombol
        if (checkbox.checked) {
            uploadButton.removeAttribute('disabled');
        } else {
            // Jika checkbox tidak dicentang, nonaktifkan tombol
            uploadButton.setAttribute('disabled', 'disabled');
        }
    }

    function submitWithLoading() {
        // Sembunyikan tombol dan tampilkan animasi loading
        uploadButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...';
        loadingIndicator.style.display = 'inline-block';
        uploadButton.setAttribute('disabled', 'disabled');

        Swal.fire({
            title: 'Pesanan Berhasil Terkirim',
            html: '<p>Silahkan <a href="https://wa.me/08989392968" target="_blank">Klik disini</a> untuk menghubungi Admin kami bahwa Anda sudah melakukan Pembayaran!</p>',
            icon: 'success',
        }).then(() => {
            $("#myform").submit();
        });


    }
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Mendapatkan informasi terkait pilihan bank dari halaman peminjaman (contoh: dari local storage)
        const selectedBank = localStorage.getItem('selectedBank'); // Pastikan Anda sudah menyimpan informasi ini saat pilihan bank dipilih

        // Mendapatkan elemen gambar bank dan nomor rekening dari halaman status checkout
        const bankLogo = document.querySelector('.bri'); // Ganti dengan selector yang sesuai dengan gambar bank
        const nomorRekening = document.getElementById('nomorRekening'); // Ganti dengan ID yang sesuai dengan nomor rekening

        // Mengganti gambar bank dan nomor rekening berdasarkan pilihan dari halaman peminjaman
        if (selectedBank === 'BRI') {
            bankLogo.src = 'frontend/images/Logo-Bank-BRI.png'; // Ganti dengan URL gambar Bank BRI
            nomorRekening.textContent = '52281-09-009868-90-8'; // Ganti dengan nomor rekening Bank BRI
        } else if (selectedBank === 'BCA') {
            bankLogo.src = 'frontend/images/Logo-Bank-BCA.png'; // Ganti dengan URL gambar Bank BCA
            nomorRekening.textContent = '5321-09-77654-90-8'; // Ganti dengan nomor rekening Bank BCA
        }
        // Tambahkan else if lain jika terdapat opsi bank lainnya
    });
</script>
<script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
<!-- Tambahkan pustaka SweetAlert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endpush