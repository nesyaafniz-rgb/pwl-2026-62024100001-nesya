@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
<h1>Data Dokter</h1>

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

<p>
    <a href="{{ route('dokter.create') }}" class="btn btn-primary btn-sm">Tambah Dokter</a>
</p>

<form method="GET" action="{{ route('dokter.index') }}" class="mb-3">
    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Nama / Kode Dokter">

    <select name="poli_id">
        <option value="">Semua Poli</option>
        @foreach ($polis as $poli)
            <option value="{{ $poli->id }}"
                @selected((string) request('poli_id') === (string) $poli->id)>
                {{ $poli->name }}
            </option>
        @endforeach
    </select>

    <select name="status">
        <option value="">Semua Status</option>
        <option value="1" @selected(request('status') === '1')>Aktif</option>
        <option value="0" @selected(request('status') === '0')>Tidak Aktif</option>
    </select>

    <select name="sort">
        <option value="name" @selected(request('sort', 'name') === 'name')>Nama</option>
        <option value="doctor_code" @selected(request('sort') === 'doctor_code')>Kode Dokter</option>
    </select>

    <select name="direction">
        <option value="asc" @selected(request('direction', 'asc') === 'asc')>Naik (A-Z)</option>
        <option value="desc" @selected(request('direction') === 'desc')>Turun (Z-A)</option>
    </select>

    <button type="submit" class="btn btn-primary btn-sm">Terapkan</button>

    <a href="{{ route('dokter.index') }}" class="btn btn-secondary btn-sm">Reset</a>
</form>

<p>
    Menampilkan {{ $doctors->count() }} dari {{ $doctors->total() }} data.
</p>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama</th>
            <th>Spesialisasi</th>
            <th>Poli</th>
            <th>No. Telepon</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($doctors as $doctor)
            <tr>
                <td>{{ $doctors->firstItem() + $loop->index }}</td>
                <td>{{ $doctor->doctor_code }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialization }}</td>
                <td>{{ $doctor->poli?->name ?? '-' }}</td>
                <td>{{ $doctor->phone ?? '-' }}</td>
                <td>
                    @if ($doctor->is_active)
                        <span>Aktif</span>
                    @else
                        <span>Tidak Aktif</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('dokter.edit', $doctor->id) }}">Edit</a>

                    <form action="{{ route('dokter.destroy', $doctor->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Hapus data dokter?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="8">
                    @if (request()->filled('search') || request()->filled('poli_id') || request()->filled('status'))
                        Data dokter tidak ditemukan.
                    @else
                        Belum ada data dokter.
                    @endif
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">
    {{ $doctors->links('pagination::bootstrap-5') }}
</div>
@endsection