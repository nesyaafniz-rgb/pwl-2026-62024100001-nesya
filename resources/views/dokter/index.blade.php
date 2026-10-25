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
                <td>{{ $loop->iteration }}</td>
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
                <td colspan="8">Belum ada data dokter.</td>
            </tr>
        @endforelse
    </tbody>
</table>
@endsection