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

                        <form method="POST" action="{{ url('partisipan/' . $partisipan->id) }}">
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

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
