@extends('admin.layout.app')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
@section('title')

Data Peminjam
@endsection

@section('content')
<div class="main-panel">
    <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data Peminjaman</h4>
                    <div class="my-2 col-8">
                        <form action="" method="GET">
                            <div class="input-group">
                                <input type="text" class="form-control" name="cari" placeholder="Cari">
                                <button class="input-group-text btn-primary">Search</button>
                            </div>
                        </form>
                    </div>

                    <div class="table-responsive pt-3">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>
                                        No
                                    </th>
                                    <th>
                                        Username
                                    </th>
                                    <th>
                                        Mobil
                                    </th>
                                    <th>
                                        Tanggal Mulai
                                    </th>
                                    <th>
                                        Tanggal Selesai
                                    </th>
                                    <th>
                                        Biaya
                                    </th>
                                    <th>
                                        Status
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    @foreach ($pinjam as $pinjams )
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ $pinjams->user->name }}
                                    </td>
                                    <td>
                                        {{ $pinjams->mobil->name }}
                                    </td>
                                    <td>
                                        {{ $pinjams->tanggal_mulai }}
                                    </td>
                                    <td>
                                        {{ $pinjams->tanggal_selesai }}
                                    </td>
                                    <td>
                                        {{ $pinjams->biaya }}
                                    </td>
                                    <td>
                                        @if ($pinjams->status == 'selesai')
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-success">{{ $pinjams->status }}</button></a>
                                        @elseif ($pinjams->status == 'sedangdisewa')
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-warning">{{ $pinjams->status }}</button></a>
                                        @else
                                        <a href="{{ route('edit',['id' => $pinjams->id])}}"><button type="submit" style="border: none;" class="badge badge-danger">{{ $pinjams->status }}</button></a>
                                        @endif

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- <script>
        // document.getElementById('validasi').addEventListener('click', function() {
        //     Swal.fire({
        //         title: "Apakah Anda yakin Ingin Merubah Status!!!",
        //         showDenyButton: true,
        //         showCancelButton: true,
        //         confirmButtonText: "Save",
        //         denyButtonText: `Don't save`
        //     }).then((result) => {
        //         /* Read more about isConfirmed, isDenied below */
        //         if (result.isConfirmed) {
        //             Swal.fire("Saved!", "", "success");
        //         } else if (result.isDenied) {
        //             Swal.fire("Changes are not saved", "", "info");
        //         }
        //     });
        // });
    </script> -->

    @endsection