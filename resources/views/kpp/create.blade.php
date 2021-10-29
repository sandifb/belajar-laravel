@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
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
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
