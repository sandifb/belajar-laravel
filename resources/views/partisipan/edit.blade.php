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

    <form method="POST" action="{{ url('kpp/' . $partisipan->id) . '/update' }}">
        @csrf @method('PUT')

        <label> Nama KPP / KPP ID</label>
        <input name="kpp_id" value="{{ $partisipan->kpp_id }}" /> <br /><br />

        <label> Nama </label>
        <input name="nama" value="{{ $partisipan->nama }}" /> <br /><br />

        <label> Email </label>
        <input name="email" value="{{ $partisipan->email }}" /> <br /><br />

        <label>Jenis Kelamin </label>
        <input name="jenis_kelamin" value="{{ $partisipan->jenis_kelamin }}" />
        <button type="submit"> Update </button>
    </form>

    <a href="{{ url('/partisipan') }}">Kembali </a>


    <br />
    <br />
    <form onSubmit="return confirm('Yakin akan menghapus ?') " method="POST"
        action="{{ url('partisipan/' . $partisipan->id) }}">
        @csrf @method('delete')
        <button type="submit"> Hapus Data </button>
    </form>

</body>

</html>
