<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <form class="forms-sample" method="POST" action="">
        @csrf
        <div class="form-group">
            <label for="exampleInputName1">Name</label>
            <input name="user_id" type="text" class="form-control" placeholder="" value=" {{ Auth::user()->id }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail3">Mobil</label>
            <input name="mobil_id" type="text" class="form-control" placeholder="" value="27">
        </div>
        <div class="form-group">
            <label for="exampleSelectGender">TGL Mulai</label>
            <input name="tanggal_mulai" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleSelectGender">TGL Selesai</label>
            <input name="tanggal_selesai" type="date" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleSelectGender">Biaya</label>
            <input name="biaya" type="number" class="form-control" id="exampleInputEmail3">
        </div>
        <div class="form-group">
            <label for="exampleSelectGender">Status</label>
            <input name="status" type="text" class="form-control" value="belumbayar">
        </div>
        <button type="submit" class="btn btn-primary mr-2">Submit</button>
    </form>
</body>

</html>