@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <a href="{{ url('/kpp/create') }}"> Tambah KPP </a>

                        <table border="1" id="customers">
                            <tr>
                                <th> Kode KPP </th>
                                <th> Alamat </th>
                                <th> NO. Telp </th>
                                <th> Jlh. Partispan </th>
                                <th> Edit </th>
                            </tr>
                            @foreach ($kpp as $item)
                                <tr>
                                    <td>{{ $item->kode }} </td>
                                    <td>{{ $item->alamat }} </td>
                                    <td>{{ $item->no_telp }} </td>
                                    <td>
                                        {{ $item->partisipans->count() }} Orang
                                        <ul>
                                            @foreach ($item->partisipans as $itm)
                                                <li>{{ $itm->nama }}</li>
                                            @endforeach
                                        </ul>
                                    </td>
                                    <td>
                                        <a href="{{ url('kpp/' . $item->id) . '/edit' }}"> Edit </a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
