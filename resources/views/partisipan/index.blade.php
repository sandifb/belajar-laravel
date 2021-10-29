@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">

                        <a href="{{ url('/partisipan/create') }}"> Tambah Partispan </a>

                        <table id="customers">
                            <tr>
                                <th> KPP </th>
                                <th> Nama </th>
                                <th> Edit </th>
                            </tr>
                            @foreach ($partisipan as $item)
                                <tr>
                                    <td>{{ $item->kpp->alamat }} </td>
                                    <td>{{ $item->nama }} </td>
                                    <td>
                                        <a href="{{ url('partisipan/' . $item->id . '/edit') }}"> Edit </a>
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