@extends('layouts.app')

@section('content')

<style>
    /* Background page */
    body {
        background: #f0fdf4;
        font-family: "Inter", sans-serif;
    }

    /* Wrapper card */
    .page-card {
        background: white;
        padding: 25px 30px;
        border-radius: 18px;
        margin-top: 20px;
        box-shadow: 0 4px 20px rgba(0,0,0,0.06);
        border: 1px solid #e5e7eb;
    }

    .page-title {
        font-size: 26px;
        font-weight: 700;
        color: #166534;
        margin-bottom: 20px;
    }

    /* Buttons */
    .btn-primary {
        background: #16a34a !important;
        border: none !important;
        padding: 8px 16px;
        font-weight: 600;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background: #15803d !important;
    }

    .btn-warning {
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: 600;
        background: #facc15;
        border: none;
        color: #333;
    }

    .btn-warning:hover {
        background: #eab308;
        color: white;
    }

    .btn-danger {
        padding: 6px 12px;
        border-radius: 8px;
        font-weight: 600;
        background: #dc2626;
        border: none;
    }

    .btn-danger:hover {
        background: #b91c1c;
    }

    /* Table */
    table {
        border-radius: 12px;
        overflow: hidden;
    }

    thead {
        background: #16a34a;
        color: white;
        font-weight: 600;
        font-size: 15px;
    }

    tbody tr {
        transition: 0.2s;
    }

    tbody tr:hover {
        background: #f0fdf4;
    }

    td, th {
        vertical-align: middle;
        padding: 12px 14px !important;
    }

    /* Alert */
    .alert-success {
        background: #bbf7d0;
        border-left: 5px solid #16a34a;
        color: #065f46;
        border-radius: 6px;
        padding: 12px 18px;
        font-weight: 600;
    }
</style>

<div class="container">

    <div class="page-card">
        
        <h2 class="page-title">📍 Data Tanah</h2>

        <a href="{{ route('tanah.create') }}" class="btn btn-primary mb-3">
            + Tambah Tanah
        </a>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nama Tanah</th>
                    <th>Alamat</th>
                    <th>Luas</th>
                    <th>Status</th>
                    <th width="150">Aksi</th>
                </tr>
                </thead>

                <tbody>
                @forelse($tanahs as $t)
                    <tr>
                        <td>{{ $t->nama_tanah }}</td>
                        <td>{{ $t->alamat }}</td>
                        <td>{{ $t->luas }} m²</td>
                        <td>{{ $t->status }}</td>
                        <td>
                            <a href="{{ route('tanah.edit', $t->id) }}" 
                               class="btn btn-warning btn-sm">Edit</a>

                            <form action="{{ route('tanah.destroy', $t->id) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin hapus data ini?')">
                                    Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center text-muted">
                            Belum ada data 🌿
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

    </div>
</div>

@endsection
