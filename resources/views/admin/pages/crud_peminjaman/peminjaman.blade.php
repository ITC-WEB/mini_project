@extends('admin.layout.app')
@section('title')
Data Peminjaman
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Peminjaman</h4>
                    <table id="dataPeminjaman" class="display table" style="width:100%">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>No</th>
                                <th>Name</th>
                                <th class="text-truncate" style="min-width: 100px;white-space: normal;">
                                    Mobil
                                </th>
                                <th>Tanggal Mulai</th>
                                <th>Tanggal Selesai</th>
                                <th>Biaya</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pinjam as $pinjams )
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $pinjams->user->name }} </td>
                                <td>{{ $pinjams->mobil->name }}</td>
                                <td>{{ $pinjams->tanggal_mulai }}</td>
                                <td>{{ $pinjams->tanggal_selesai }}</td>
                                <td class="harga">{{ $pinjams->biaya }}</td>
                                <td>
                                    @if ($pinjams->status == 'selesai')
                                    <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-success">{{ $pinjams->status }}</button></a>
                                    @elseif ($pinjams->status == 'sedangdisewa')
                                    <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-warning">{{ $pinjams->status }}</button></a>
                                    @else
                                    <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-danger">{{ $pinjams->status }}</button></a>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('detail_pinjam',['id' => $pinjams->id]) }}"><button type="submit" style="border: none;" class="badge badge-success "><i class="icon-eye menu-icon"></i></button></a>
                                    <form action="{{ route('delete.peminjam', $pinjams->id) }}" method="POST" id="delete-form-{{ $pinjams->id }}" class="d-inline ">
                                        @csrf
                                        <button type="button" class="badge badge-danger delete" style="border:none;" data-id="{{ $pinjams->id }}"><i class="bi bi-trash"></i></button>
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
        new DataTable('#dataPeminjaman');
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