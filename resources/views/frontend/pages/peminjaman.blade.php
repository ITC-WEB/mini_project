@extends('frontend.layout.app')
@section('title')
Peminjaman
@endsection
@section('content')
<main>
    <section class="section-details-header"></section>
    <section class="section-details-content">
        <div class="container">
            <div class="row">
                <div class="col p-0 pl-3 pl-lg-0">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item" aria-current="page">
                                Paket Rental
                            </li>
                            <li class="breadcrumb-item" aria-current="page">
                                Details
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Checkout
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 pl-lg-0">
                    <div class="card card-details mb-3">
                        <h1>Form Perngisian Data Rental</h1>
                        <p>Malang, Indonesia</p>
                        <div class="member mt-3">
                            <form method="POST" action="/peminjaman">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="harga_sewa" value="{{ ($mobil->harga_sewa) }}">
                                <input type="hidden" name="mobil_id" value="{{ $mobil->id }}">
                                <div class="form-group">
                                    <label for="inputUsername" class="font-weight-bold">Nama </label>
                                    <input type="text" class="form-control" id="inputUsername" value="{{ Auth::user()->name}}" />
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="inputEmail" class="font-weight-bold">Email </label>
                                        <input type="email" class="form-control" id="inputEmail" value="{{ Auth::user()->email }}" />
                                    </div>
                                    <div class="col-md-6 col-sm-6">
                                        <label for="inputPhone" class="font-weight-bold">Phone </label>
                                        <input type="tel" class="form-control" id="inputPhone" value="{{Auth::user()->phone}}" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="tanggalMulai" class="font-weight-bold">Tanggal Mulai</label>
                                        <div class="input-group">
                                            <input type="text" name="tanggal_mulai" class="form-control" id="mystartdate" placeholder="Tanggal Mulai" />
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-6 mb-3">
                                        <label for="tanggalSelesai" class="font-weight-bold">Tanggal Selesai</label>
                                        <div class="input-group">
                                            <input type="text" name="tanggal_selesai" class="form-control" id="myenddate" placeholder="Tanggal Selesai" />
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" name="biaya" class="num_nights" readonly>
                                <div class="supir">
                                    <label for="inputUsername" class="font-weight-bold">Supir</label>
                                    <div class="supir-option d-flex justify-between">
                                        <div class="ya mr-4">
                                            <input type="radio" id="flexRadioDefault1" name="flexRadioDefault" value="ya" />
                                            <label for="flexRadioDefault1">Ya</label>
                                        </div>
                                        <div class="tidak">
                                            <input type="radio" id="flexRadioDefault2" name="flexRadioDefault" value="tidak" />
                                            <label for="flexRadioDefault2">Tidak</label>
                                        </div>

                                    </div>
                                </div>

                                <div class="pembayaran">
                                    <label for="inputUsername" class="font-weight-bold mt-3">Pembayaran Bank </label>
                                    <div class="grid">
                                        <label class="card-button">
                                            <input name="plan" class="radio" type="radio" checked>
                                            <span class="plan-details">
                                                <span class="plan-type">BCA</span>
                                                <span class="mt-2 text-center">5321-09-77654-90-8</span>
                                            </span>
                                        </label>
                                        <label class="card-button">
                                            <input name="plan" class="radio" type="radio">
                                            <span class="plan-details" aria-hidden="true">
                                                <span class="plan-type">BRI</span>
                                                <span class="mt-2 text-center">52281-09-009868-90-8</span>
                                            </span>
                                        </label>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="join-container mt-5">
                                        <button type="submit" class="btn btn-block btn-join-now mt-3 py-2"> Checkout</button>
                                    </div>
                                    <div class="text-center mt-3">
                                        <a href="#" class="text-muted">Cancel Booking</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card card-details card-right">
                        <h2>Checkout Information</h2>
                        <table class="trip-informations">
                            <tr>
                                <th width="50%">Mobil</th>
                                <td width="50%" class="text-right">{{$mobil->name}}</td>
                            </tr>
                            <tr>
                            <tr>
                                <th width="50%">Supir</th>
                                <td width="50%" class="text-right supir-td"></td>
                            </tr>
                            <tr>
                                <th width="50%">Harga</th>
                                <td width="50%" class="text-right harga">{{ $mobil->harga_sewa }}/Hari</td>
                            </tr>
                            <tr>
                                <th width="50%">Total</th>
                                <td width="50%" class="text-right total-harga">
                                   
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

@push('prepend-style')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/css/default/zebra_datepicker.min.css">
@endpush
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
            } else {
                console.error('Nilai tidak valid untuk elemen dengan kelas "harga"');
            }
        });
    });
</script>
<script src="https://cdn.jsdelivr.net/gh/stefangabos/Zebra_Datepicker/dist/zebra_datepicker.min.js"></script>
<script>
    $(document).ready(function() {
        $(function() {

            $('#mystartdate').Zebra_DatePicker({
                direction: 3, // represents the earliest start day from now
                select_other_months: 1,
                pair: $('#myenddate'),
                format: 'm/d/Y',
                // onClose: function(el) {
                //     showDays(el);
                // }
            });

            $('#myenddate').Zebra_DatePicker({
                direction: [1, 30], // represents 30 days from the selected date
                select_other_months: 1,
                format: 'm/d/Y',
                onClose: function(el) {
                    showDays(el);
                }
            });
        });

    function showDays() {
    var harga_sewa = parseInt($('input[name="harga_sewa"]').val());

    var start = $('#mystartdate').val();
    var end = $('#myenddate').val();
    if (!start || !end) return;

    var startArr = start.split("/");
    var endArr = end.split("/");
    var startDate = new Date(startArr[2], startArr[0] - 1, startArr[1]);
    var endDate = new Date(endArr[2], endArr[0] - 1, endArr[1]);

    var timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
    var days = Math.ceil(timeDiff / (1000 * 3600 * 24));

    var totalBiaya = days * harga_sewa;

    // Update tampilan harga sesuai dengan totalBiaya
    $('.harga').text('Rp. ' + totalBiaya.toLocaleString('id-ID'));

    // Tambahan logika biaya supir
    var sopirSelected = $('input[name="flexRadioDefault"]:checked').val();
    var biayaSopir = 0;

    if (sopirSelected === "ya") {
        biayaSopir = 100000; // Biaya supir tambahan
    }

    var totalBiayaSopir = totalBiaya + biayaSopir;

    // Update tampilan harga dengan biaya supir (jika ada)
    $('.supir-td').text('Rp. ' + biayaSopir.toLocaleString('id-ID'));
    $('.num_nights').val('Rp. ' + totalBiayaSopir.toLocaleString('id-ID'));
    
    // Tambahan logika biaya asuransi
    var asuransiSelected = $('input[name="asuransi"]:checked').val();
    var biayaAsuransi = 0;
    
    if (asuransiSelected === "ya") {
        biayaAsuransi = 50000; // Biaya asuransi tambahan
    }

    var totalBiayaKeseluruhan = totalBiayaSopir + biayaAsuransi;

    // Update tampilan harga dengan biaya asuransi (jika ada)
    $('.asuransi-td').text('Rp. ' + biayaAsuransi.toLocaleString('id-ID'));
    $('.total-biaya').text('Rp. ' + totalBiayaKeseluruhan.toLocaleString('id-ID'));

    // ... (bagian lain dari logika perhitungan biaya, jika ada)
}

    });
</script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const supirOptionYes = document.getElementById("flexRadioDefault1");
        const supirOptionNo = document.getElementById("flexRadioDefault2");
        const supirTd = document.querySelector(".supir-td");
        const totalBiayaElem = document.querySelector('.total-harga');
        let hargaSewa = parseInt($('input[name="harga_sewa"]').val());
        let biayaSupir = 0;
    
        supirOptionYes.addEventListener("change", calculateTotal);
        supirOptionNo.addEventListener("change", calculateTotal);
    
        function calculateTotal() {
            if (supirOptionYes.checked) {
                supirTd.textContent = 'Rp. 100.000';
                biayaSupir += 100000;
            } else if (supirOptionNo.checked) {
                supirTd.textContent = 'Rp. 0';
                biayaSupir -= 100000;
            }
            
            const totalBiaya = calculateTotalBiaya();
            $(".total-harga").text('Rp. ' + totalBiaya.toLocaleString('id-ID'));
            $('.num_nights').val('Rp. ' + totalBiaya.toLocaleString('id-ID'));
        }
        
        function calculateTotalBiaya() {
            const start = $('#mystartdate').val();
            const end = $('#myenddate').val();
    
            if (!start || !end) return 0;
    
            const startArr = start.split("/");
            const endArr = end.split("/");
            const startDate = new Date(startArr[2], startArr[0] - 1, startArr[1]);
            const endDate = new Date(endArr[2], endArr[0] - 1, endArr[1]);
    
            const timeDiff = Math.abs(endDate.getTime() - startDate.getTime());
            const days = Math.ceil(timeDiff / (1000 * 3600 * 24));
    
            const totalBiayaSewa = days * hargaSewa;
            const totalBiaya = totalBiayaSewa + biayaSupir;
    
            return totalBiaya;
        }
    });
    
</script>
@endpush