<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Create KPP </title>
</head>

<body>

    <h1> Tambah Data baru </h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('kpp') }}">
        @csrf

        <label>Kode </label>
        <input name="kode" /> <br /><br />

        <label>Alamat </label>
        <input name="alamat" /> <br /><br />

        <label>No. Telp </label>
        <input name="no_telp" />
        <button type="submit"> Simpan </button>
    </form>

    <a href="{{ url('/kpp') }}">Kembali </a>

</body>

</html>
