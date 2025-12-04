@extends('layouts.app')

@section('content')

<style>
    body { 
        background: #f0fdf4; 
        font-family: "Inter", sans-serif; 
    }

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
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .btn-primary {
        background: #16a34a !important;
        border: none !important;
        padding: 8px 18px;
        font-weight: 600;
        border-radius: 8px;
    }

    .btn-primary:hover {
        background: #15803d !important;
    }

    .form-label {
        font-weight: 600;
        color: #065f46;
        margin-bottom: 6px;
    }

    .form-control {
        border-radius: 10px;
        padding: 10px;
        border: 1px solid #d1d5db;
    }
</style>

<div class="container">
    <div class="page-card">

        <h2 class="page-title">✏️ Edit Kategori</h2>

        <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Nama Kategori</label>
                <input 
                    type="text" 
                    name="nama" 
                    class="form-control" 
                    value="{{ $kategori->nama }}" 
                    required
                >
            </div>

            <button class="btn btn-primary">
                Perbarui
            </button>
        </form>

    </div>
</div>

@endsection
