@extends('layouts.app')

@section('title', 'Edit Pasien')

@section('content')
<h1>Edit Pasien</h1>

<form action="{{ route('pasien.update', $pasien->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">No. Rekam Medis</label>
        <input type="text" name="medical_record_number" class="form-control"
            value="{{ old('medical_record_number', $pasien->medical_record_number) }}">
        @error('medical_record_number')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control"
            value="{{ old('name', $pasien->name) }}">
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Jenis Kelamin</label>
        <select name="gender" class="form-control">
            <option value="">-- Pilih --</option>
            <option value="L" @selected(old('gender', $pasien->gender) == 'L')>Laki-laki (L)</option>
            <option value="P" @selected(old('gender', $pasien->gender) == 'P')>Perempuan (P)</option>
        </select>
        @error('gender')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Tanggal Lahir</label>
        <input type="date" name="birth_date" class="form-control"
            value="{{ old('birth_date', $pasien->birth_date) }}">
        @error('birth_date')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Alamat</label>
        <textarea name="address" class="form-control" rows="3">{{ old('address', $pasien->address) }}</textarea>
        @error('address')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="phone" class="form-control"
            value="{{ old('phone', $pasien->phone) }}">
        @error('phone')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('pasien.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection