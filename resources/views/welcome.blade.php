<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Sandi Fadilah </title>

    <link rel="stylesheet" type="text/css" href="{{ asset('bimtek.css') }}" />

</head>

<body>

    {{-- ini adalah komentar --}}
    {{-- in line style --}}
    <h1 style="color:#3473d9">Belajar Laravel</h1>

    {{-- Class > .nama_class --}}
    <h2 class="warna-biru"> Contoh Tabel </h2>

    {{-- tag id > #nama id nya --}}
    <table id="customers">
        <tr>
            <th>Firstname</th>
            <th>Lastname</th>
            <th>Age</th>
        </tr>
        <tr>
            <td>Jill</td>
            <td>Smith</td>
            <td>50</td>
        </tr>
        <tr>
            <td>Eve</td>
            <td>Jackson</td>
            <td>94</td>
        </tr>
        <tr>
            <td>John</td>
            <td>Doe</td>
            <td>80</td>
        </tr>
    </table>

    <h2> Contoh Input </h2>
    <h2> Contoh Button </h2>


    <button onclick="alert('Kamu yakin ?')"> Click Me </button>


</body>

</html>
