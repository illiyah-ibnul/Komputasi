@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Detail Kategori</h2>

    <!-- Menampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Menampilkan detail kategori -->
    <div class="card">
        <div class="card-header">
            <h4>{{ $kategori->nama }}</h4>
        </div>
        <div class="card-body">
            <p><strong>Keterangan:</strong> {{ $kategori->keterangan ?? 'Tidak ada keterangan' }}</p>
            <p><strong>Status:</strong> 
                <span class="badge 
                    {{ $kategori->status == 'aktif' ? 'badge-success' : 'badge-secondary' }}">
                    {{ ucfirst($kategori->status) }}
                </span>
            </p>
            <p><strong>Dibuat pada:</strong> {{ $kategori->created_at->format('d-m-Y H:i') }}</p>
            <p><strong>Terakhir diperbarui:</strong> {{ $kategori->updated_at->format('d-m-Y H:i') }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali ke Daftar Kategori</a>
            <!-- Pastikan route dan parameter ID sesuai -->
            <a href="{{ route('kategori.edit', $kategori->id_kategori) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection
