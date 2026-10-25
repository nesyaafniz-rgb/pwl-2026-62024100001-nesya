@extends('layouts.app')

@section('title', 'Edit Dokter')

@section('content')
<h1>Edit Dokter</h1>

<form action="{{ route('dokter.update', $dokter->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Kode Dokter</label>
        <input type="text" name="doctor_code" class="form-control"
               value="{{ old('doctor_code', $dokter->doctor_code) }}">
        @error('doctor_code')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nama</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $dokter->name) }}">
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Spesialisasi</label>
        <input type="text" name="specialization" class="form-control"
               value="{{ old('specialization', $dokter->specialization) }}">
        @error('specialization')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Poli</label>
        <select name="poli_id" class="form-control">
            <option value="">-- Pilih Poli --</option>
            @foreach ($polis as $poli)
                <option value="{{ $poli->id }}" @selected(old('poli_id', $dokter->poli_id) == $poli->id)>
                    {{ $poli->name }}
                </option>
            @endforeach
        </select>
        @error('poli_id')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">No. Telepon</label>
        <input type="text" name="phone" class="form-control"
               value="{{ old('phone', $dokter->phone) }}">
        @error('phone')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="is_active" class="form-control">
            <option value="1" @selected((string) old('is_active', (int) $dokter->is_active) === '1')>Aktif</option>
            <option value="0" @selected((string) old('is_active', (int) $dokter->is_active) === '0')>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('dokter.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection