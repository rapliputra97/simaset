@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Bangunan</h2>

    <div class="card">
        <div class="card-body">
            <p><strong>Nama Bangunan:</strong> {{ $bangunan->nama_bangunan }}</p>
            <p><strong>Kode Bangunan:</strong> {{ $bangunan->kode_bangunan }}</p>
            <p><strong>Tanah:</strong> {{ $bangunan->tanah->nama_tanah }}</p>
        </div>
    </div>

    <a href="{{ route('bangunan.index') }}" class="btn btn-secondary mt-3">Kembali</a>
    <a href="{{ route('bangunan.edit', $bangunan->id) }}" class="btn btn-primary mt-3">Edit</a>
</div>
@endsection
