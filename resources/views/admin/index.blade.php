<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Selamat Datang {{ Auth::user()->name }}</h1>
    <p>Di Halaman Admin dengan Role: {{ Auth::user()->role->name }}</p>
    <a href="/logout">Logout</a>
</body>

</html>