@extends('layouts.app')

@section('title', 'Edit Poli')

@section('content')
<h1>Edit Poli</h1>

<form action="{{ route('poli.update', $poli->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Kode Poli</label>
        <input type="text" name="code" class="form-control"
               value="{{ old('code', $poli->code) }}">
        @error('code')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Nama Poli</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $poli->name) }}">
        @error('name')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Deskripsi</label>
        <textarea name="description" class="form-control" rows="3">{{ old('description', $poli->description) }}</textarea>
        @error('description')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">Status</label>
        <select name="is_active" class="form-control">
            <option value="1" @selected((string) old('is_active', (int) $poli->is_active) === '1')>Aktif</option>
            <option value="0" @selected((string) old('is_active', (int) $poli->is_active) === '0')>Tidak Aktif</option>
        </select>
        @error('is_active')
            <div class="text-danger small">{{ $message }}</div>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('poli.index') }}" class="btn btn-secondary">Batal</a>
</form>
@endsection