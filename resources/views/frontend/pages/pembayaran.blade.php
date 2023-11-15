<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Silahkan Lakukan Pembayaran</h1>
    <p>Atas nama {{ Auth::user()->name }}</p>
    <a href="/user">Back To Home</a>
</body>

</html>