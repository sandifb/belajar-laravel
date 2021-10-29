@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
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

                        <form method="POST" action="{{ url('kpp/' . $kpp->id . '/update') }}">
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


                        <br />
                        <br />
                        <form onSubmit="return confirm('Yakin akan menghapus ?') " method="POST"
                            action="{{ url('kpp/' . $kpp->id . '/delete') }}">
                            @csrf @method('DELETE')
                            <button type="submit"> Hapus Data </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
