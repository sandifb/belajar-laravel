<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Create KPP </title>
</head>

<body>

    <h1> Edit KPP </h1>



    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ url('kpp/update/' . $kpp->id) }}">
        @csrf @method('PUT')

        <label>Kode </label>
        <input name="kode" readonly value="{{ $kpp->kode }}" /> <br /><br />

        <label>Alamat </label>
        <input name="alamat" value="{{ $kpp->alamat }}" /> <br /><br />

        <label>No. Telp </label>
        <input name="no_telp" value="{{ $kpp->no_telp }}" />
        <button type="submit"> Update </button>
    </form>

    <a href="{{ url('/kpp') }}">Kembali </a>

</body>

</html>
