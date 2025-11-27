@extends('layouts.app')

@section('content')
<div class="container">

    <div class="card p-4 shadow-sm border-success">
        <h3 class="text-success mb-3">Detail Bangunan</h3>

        <p><strong>Nama Bangunan:</strong> {{ $bangunan->nama_bangunan }}</p>
        <p><strong>Kode Bangunan:</strong> {{ $bangunan->kode_bangunan }}</p>
        <p><strong>Tanah:</strong> {{ $bangunan->tanah->nama_tanah }}</p>

        <a href="{{ route('bangunan.index') }}" class="btn btn-secondary">Kembali</a>
    </div>

</div>
@endsection
