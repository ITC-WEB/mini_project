<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Silahkan Lakukan Pembayaran</h1>
    <p>Atas Nama : {{ Auth::user()->name }}</p>
    <P>Tanggal Sewa : {{ $peminjaman->tanggal_mulai }}</P>
    <P>Tanggal Selesai : {{ $peminjaman->tanggal_selesai }}</P>
    <P>Total Harga: {{ $peminjaman->biaya }}</P>
    <form action="/update-pembayaran" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col md-6 mb-4">
                <label for="">Bukti Upload</label><br>
                <input type="file" name="bukti">
            </div>
            <button type="submit" class="btn btn-block btn-primary">Upload</button>
        </div>
        <input type="hidden" value="{{Auth::user()->id}}" name="user_id">
    </form>
    <a href="/user">Back To Home</a>
</body>

</html>