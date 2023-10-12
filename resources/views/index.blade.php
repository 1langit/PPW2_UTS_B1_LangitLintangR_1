@extends('table')

@section('title')
    <h1 class="my-5">Data Pemain</h1>
@endsection

@section('head')
    <tr>
        <td>id</td>
        <td>Nama Pemain</td>
        <td>No Punggung</td>
        <td>Posisi</td>
    </tr>
@endsection

@section('body')
    @foreach ($data_pemain as $pemain)
    <tr>
        <td>{{ $pemain->id }}</td>
        <td>{{ $pemain->nama_pemain }}</td>
        <td>{{ $pemain->no_punggung }}</td>
        <td>{{ $pemain->posisi }}</td>
    </tr> 
    @endforeach
@endsection