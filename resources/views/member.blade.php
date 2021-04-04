<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
    <title>Member</title>
</head>
<body>
    @php
    $x = 1;
    $collect = $members->sortBy('umur');
    @endphp
    <table class="table table-dark table-striped">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Jurusan</th>
            <th>Asal</th>
        </tr>
        @foreach($collect as $data)
        <tr>
            <td scope="row">{{$x++}}</td>
            <td>{{$data->nama}}</td>
            <td>{{$data->umur}}</td>
            <td>{{$data->jurusan}}</td>
            <td>{{$data->asal}}</td>
        </tr>
        @endforeach
        <tr>
            <td scope="row" colspan="2">Member tertua</td>
            <td>Umur : {{$collect->max('umur')}}</td>
            <td></td>
            <td></td>
        </tr>
    </table>
</body>
</html>