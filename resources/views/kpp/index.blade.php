<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Data KPP </title>
</head>

<body>

    <a href="{{ url('/kpp/create') }}"> Tambah KPP </a>

    <table id="customers">
        <tr>
            <th> Kode KPP </th>
            <th> Alamat </th>
            <th> NO. Telp </th>
            <th> Edit </th>
        </tr>
        @foreach ($kpp as $item)
            <tr>
                <td>{{ $item->kode }} </td>
                <td>{{ $item->alamat }} </td>
                <td>{{ $item->no_telp }} </td>
                <td>
                    <a href="{{ url('kpp/edit/' . $item->id) }}"> Edit </a>
                </td>
            </tr>
        @endforeach
    </table>

</body>

</html>
