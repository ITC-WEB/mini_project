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
                        <a href="/create-mobil" class="card-title btn btn-primary text-white" style="font-size: 15px;"> +
                            Tambah Data</a>
                        <div class="my-2 col-8">
                            <form action="" method="GET">
                                <div class="input-group">
                                    <input type="text" class="form-control" name="cari" placeholder="Cari">
                                    <button class="input-group-text btn-primary">Search</button>
                                </div>
                            </form>
                        </div>
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
                        <div class="table-responsive pt-3">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>
                                            No
                                        </th>
                                        <th>
                                            Nomer Kendaraan
                                        </th>
                                        <th>
                                            Name Mobil
                                        </th>
                                        <th>
                                            Merek
                                        </th>
                                        <th>
                                            Harga Sewa
                                        </th>
                                        <th>
                                            Status
                                        </th>
                                        <th>
                                            Action
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($mobil as $mobils)
                                        <tr>
                                            <td>
                                                {{ $loop->iteration }}
                                            </td>
                                            <td>
                                                {{ $mobils->noplat }}
                                            </td>
                                            <td>
                                                {{ $mobils->name }}
                                            </td>
                                            <td>
                                                {{ $mobils->merek->name }}
                                            </td>
                                            <td class="harga">
                                                {{ $mobils->harga_sewa }}
                                            </td>
                                            <!-- <td>
                                            <img src="{{ asset('storage/public/mobil/' . $mobils->gambar) }}" style="width: 140px;height:80px;border-radius: 10px;" alt="Mobil">
                                        </td> -->
                                            <td>
                                                <a href="mobil/{{ $mobils->id }}"
                                                    class="btn btn-sm btn-{{ $mobils->status ? 'success' : 'warning' }}">
                                                    {{ $mobils->status ? 'tersedia' : 'disewa' }}
                                                </a>
                                            </td>
                                            <td><a href="{{ route('edit-mobil', ['id' => $mobils->id]) }}"><button
                                                        type="submit" style="border: none;" class="badge badge-primary"><i
                                                            class="bi bi-pencil-square"></i></button></a>

                                                <a href="{{ route('show-mobil', ['id' => $mobils->id]) }}"><button
                                                        type="submit" style="border: none;" class="badge badge-success"><i
                                                            class="icon-eye menu-icon"></i></button></a>
                                                <form action="{{ route('delete-mobil', $mobils->id) }}" method="POST"
                                                    id="delete-form-{{ $mobils->id }}" class="d-inline">
                                                    @csrf
                                                    <button type="button" class="badge badge-danger delete"
                                                        style="border:none;" data-id="{{ $mobils->id }}"><i
                                                            class="bi bi-trash"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        <div class="d-flex justify-content-end my-5">
                            {{ $mobil->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection


    @push('addon-style')
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    @endpush

    @push('addon-script')
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
