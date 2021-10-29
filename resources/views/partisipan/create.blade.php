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

    <form method="POST" action="{{ url('partisipan') }}">
        @csrf

        <label> Nama KPP / KPP ID</label>
        <input name="kpp_id" /> <br /><br />

        <label> Nama </label>
        <input name="nama" /> <br /><br />

        <label> Email </label>
        <input name="email" /> <br /><br />

        <label>Jenis Kelamin </label>
        <input name="jenis_kelamin" />
        <button type="submit"> Simpan </button>
    </form>

    <a href="{{ url('/partisipan') }}">Kembali </a>

</body>

</html>
