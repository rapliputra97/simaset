@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Tanah</h2>
    <div class="card">
        <div class="card-body">
            <p><strong>Nama Tanah:</strong> {{ $tanah->nama_tanah }}</p>
            <p><strong>Kode Tanah:</strong> {{ $tanah->kode_tanah }}</p>
        </div>
    </div>
    <a href="{{ route('tanah.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    <a href="{{ route('tanah.edit', $tanah->id) }}" class="btn btn-primary mt-3">Edit</a>
</div>
@endsection
