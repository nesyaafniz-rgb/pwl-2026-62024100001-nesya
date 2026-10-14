@extends('layouts.app')

@section('title', 'Tambah Pasien')

@section('content')
<h1>Tambah Pasien</h1>

<form action="{{ route('pasien.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label class="form-label">No. Rekam Medis</label>
        <input type="text" name="medical_record_number" class="form-control"
            value="{{ old('medical_record_number') }}">
        @error('medical_record_number')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control"
            value="{{ old('name') }}">
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="gender" class="form-control">
            <option value="">-- Pilih --</option>
            <option value="L" @selected(old('gender') == 'L')>Laki-laki (L)</option>
            <option value="P" @selected(old('gender') == 'P')>Perempuan (P)</option>
        </select>
        @error('gender')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="birth_date" class="form-control"
            value="{{ old('birth_date') }}">
        @error('birth_date')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="address" class="form-control" rows="3">{{ old('address') }}</textarea>
        @error('address')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="phone" class="form-control"
            value="{{ old('phone') }}">
        @error('phone')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection