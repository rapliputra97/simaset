@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Tanah</h2>

    <ul class="list-group">
        <li class="list-group-item"><strong>Nama Tanah:</strong> {{ $tanah->nama_tanah }}</li>
        <li class="list-group-item"><strong>Alamat:</strong> {{ $tanah->alamat }}</li>
        <li class="list-group-item"><strong>Luas:</strong> {{ $tanah->luas }}</li>
        <li class="list-group-item"><strong>Status:</strong> {{ $tanah->status }}</li>
    </ul>

    <a href="{{ route('tanah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
</div>
@endsection
