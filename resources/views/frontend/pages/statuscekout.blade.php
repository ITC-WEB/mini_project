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
                <img class="bri" src="frontend/images/Logo-Bank-BRI.png" alt="" />
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
        <form action="/update-pembayaran" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
            <div class="input mt-4 mx-auto">
                <label for="inputSIM" class="font-weight-medium"><span class="text-danger">*</span></label> Silahkan Unggah Bukti Pembayaran</label>
                <div class="custom-file">
                    <input type="file" name="bukti" class="custom-file-input" id="inputSIM" accept=".jpg, .jpeg, .png, .pdf" />
                    <label class="custom-file-label" for="inputSIM">img.png</label>
                </div>

                <div class="alert alert-success font-weight-medium mt-2" id="AlertSukses">
                <h3>Pesanan Berhasil Terkirim</h3>
                    <p>Silahkan <a href="https://wa.me/08989392968" target="_blank" class="alert-link">Klik disini</a> untuk menghubungi Admin kami bahwa anda Sudah Melakukan Pembayaran !</p>
                </div>

                <div class="form-group form-check mt-2">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1" onclick="toggleUploadButton()">
                    <label class="form-check-label" for="exampleCheck1">Saya sudah melakukan Pembayaran dan mengunggah Bukti Pembayaran</label>
                    </div>
                
               
                <div class="btn-container">
                    <button type="submit" onclick="submitWithLoading()" class="btn btn-block btn-primary mt-4" id="uploadButton" disabled>
                        Kirim
                        </button>
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

        setTimeout(function () {
            // Hentikan animasi loading, tampilkan alert, dan jalankan fungsi MyAlertSukses
            AlertSukses.style.display = 'block';
            uploadButton.innerHTML = 'Kirim';
            loadingIndicator.style.display = 'none';
            uploadButton.removeAttribute('disabled');
        }, 3000);
    }
</script>
<script src="frontend/libraries/gijgo/js/gijgo.min.js"></script>
@endpush