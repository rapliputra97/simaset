@extends('layout')

@section('content')
<h2>Edit Kategori</h2>

<form action="{{ route('kategori.update', $data->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Kategori</label>
        <input type="text" name="nama" class="form-control" value="{{ $data->nama }}">
    </div>

    <button class="btn btn-warning">Update</button>
    <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali</a>
</form>
@endsection
