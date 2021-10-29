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

                        <form method="POST" action="{{ url('partisipan') }}">
                            @csrf

                            <label> Nama KPP / KPP ID</label>
                            <select name="kpp_id">
                                <option disabled> - pilih kpp -</option>
                                @foreach ($kpp as $kpp)
                                    <option value="{{ $kpp->id }}"> {{ $kpp->kode }} - {{ $kpp->alamat }}</option>
                                @endforeach
                            </select>

                            <br /><br />



                            <label> Nama </label>
                            <input name="nama" /> <br /><br />

                            <label> Email </label>
                            <input name="email" /> <br /><br />

                            <label>Jenis Kelamin </label>
                            <select name="jenis_kelamin">
                                <option disabled> - pilih jenis kelamin -</option>
                                <option value="1" > - Laki laki</option>
                                <option value="2"> - Perempuan</option>
                                
                            </select>
                            <button type="submit"> Simpan </button>
                        </form>

                        <a href="{{ url('/partisipan') }}">Kembali </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
