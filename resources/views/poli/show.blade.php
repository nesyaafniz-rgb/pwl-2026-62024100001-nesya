@extends('layouts.app')

@section('title', 'Detail Poli')

@section('content')
<h1>Detail Poli</h1>

<table border="1" cellpadding="8">
    <tr>
        <th>Kode</th>
        <td>{{ $poli->code }}</td>
    </tr>
    <tr>
        <th>Nama Poli</th>
        <td>{{ $poli->name }}</td>
    </tr>
    <tr>
        <th>Deskripsi</th>
        <td>{{ $poli->description ?? '-' }}</td>
    </tr>
    <tr>
        <th>Status</th>
        <td>
            @if ($poli->is_active)
                Aktif
            @else
                Tidak Aktif
            @endif
        </td>
    </tr>
</table>

<h3 class="mt-4">Daftar Dokter di {{ $poli->name }}</h3>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Kode Dokter</th>
            <th>Nama</th>
            <th>Spesialisasi</th>
            <th>No. Telepon</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($poli->doctors as $doctor)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $doctor->doctor_code }}</td>
                <td>{{ $doctor->name }}</td>
                <td>{{ $doctor->specialization }}</td>
                <td>{{ $doctor->phone ?? '-' }}</td>
                <td>
                    @if ($doctor->is_active)
                        Aktif
                    @else
                        Tidak Aktif
                    @endif
                </td>
            </tr>
        @empty
            <tr>
                <td colspan="6">Belum ada dokter di poli ini.</td>
            </tr>
        @endforelse
    </tbody>
</table>

<p class="mt-3">
    <a href="{{ route('poli.index') }}" class="btn btn-secondary btn-sm">Kembali</a>
</p>
@endsection