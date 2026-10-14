@extends('layouts.app')

@section('title', 'Tambah Poli')

@section('content')
<h1>Tambah Poli</h1>

<form action="{{ route('poli.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">Kode Poli</label>
        <input type="text" name="code" class="form-control"
               value="{{ old('code') }}">
        @error('code')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Poli</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name') }}">
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description') }}</textarea>
        @error('description')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="is_active" class="form-control">
            <option value="1" @selected(old('is_active', '1') == '1')>Aktif</option>
            <option value="0" @selected(old('is_active', '1') == '0')>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('poli.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection