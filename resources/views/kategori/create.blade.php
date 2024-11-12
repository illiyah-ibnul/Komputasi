<!-- resources/views/kategori/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Tambah Kategori Baru</h2>

    <!-- Tampilkan pesan error jika ada -->
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <!-- Form untuk menambah kategori -->
    <form action="{{ route('kategori.store') }}" method="POST">
        @csrf <!-- Token CSRF untuk keamanan -->

        <!-- Input Nama Kategori -->
        <div class="form-group">
            <label for="nama">Nama Kategori</label>
            <input type="text" name="nama" id="nama" class="form-control" required value="{{ old('nama') }}">
        </div>

        <!-- Input Keterangan Kategori -->
        <div class="form-group">
            <label for="keterangan">Keterangan</label>
            <textarea name="keterangan" id="keterangan" class="form-control">{{ old('keterangan') }}</textarea>
        </div>

        <!-- Pilihan Status Kategori -->
        <div class="form-group">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-control" required>
                <option value="aktif" {{ old('status') == 'aktif' ? 'selected' : '' }}>Aktif</option>
                <option value="nonaktif" {{ old('status') == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
            </select>
        </div>

        <!-- Tombol Submit -->
        <button type="submit" class="btn btn-primary mt-3">Simpan Kategori</button>
        <a href="{{ route('kategori.index') }}" class="btn btn-secondary">Kembali ke Daftar Kategori</a>
        
    </form>
</div>

