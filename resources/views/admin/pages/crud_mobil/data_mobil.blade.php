@extends('admin.layout.app')
@section('title')
Data Mobil
@endsection
@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Mobil</h4>
                    <a href="/create-mobil" class="card-title btn btn-sm btn-primary text-white" style="font-size: 15px;"> +
                        Tambah Data
                    </a>
                    @if (Session::has('status'))
                    <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @elseif (Session::has('update'))
                    <div class="alert alert-primary alert-dismissible fade show text-center" role="alert">
                        {{ Session::get('message') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <table id="dataMobil" class="display table" style="width:100%">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>No</th>
                                <th>Nomor Kendaraan</th>
                                <th>Merek Mobil</th>
                                <th>Pabrikan</th>
                                <th>Harga Sewa</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($mobil as $mobils)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td> {{ $mobils->noplat }}</td>
                                <td>{{ $mobils->name }}</td>
                                <td> {{ $mobils->merek->name }}</td>
                                <td class="harga">{{ $mobils->harga_sewa }}</td>
                                <td>
                                    <a href="mobil/{{ $mobils->id }}" class="btn btn-sm btn-{{ $mobils->status ? 'success' : 'warning' }}">
                                        {{ $mobils->status ? 'tersedia' : 'disewa' }}
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('edit-mobil', ['id' => $mobils->id]) }}"><button type="submit" style="border: none;" class="badge badge-primary"><i class="bi bi-pencil-square"></i></button></a>

                                    <a href="{{ route('show-mobil', ['id' => $mobils->id]) }}"><button type="submit" style="border: none;" class="badge badge-success"><i class="icon-eye menu-icon"></i></button></a>
                                    <form action="{{ route('delete-mobil', $mobils->id) }}" method="POST" id="delete-form-{{ $mobils->id }}" class="d-inline">
                                        @csrf
                                        <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $mobils->id }}"><i class="bi bi-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </div>

    @endsection


    @push('addon-style')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />

    @endpush

    @push('addon-script')
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>

    <script>
        new DataTable('#dataMobil');
    </script>
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
    @endpush