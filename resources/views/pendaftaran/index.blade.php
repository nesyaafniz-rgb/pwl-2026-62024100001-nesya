@extends('layouts.app')

@section('title', 'Data Pendaftaran')

@section('content')
<h1>Data Pendaftaran</h1>

<form method="GET" action="{{ route('pendaftaran.index') }}" class="mb-3">
    <input type="text"
           name="search"
           value="{{ request('search') }}"
           placeholder="Nama pasien">

    <select name="doctor_id">
        <option value="">Semua Dokter</option>
        @foreach ($doctors as $doctor)
            <option value="{{ $doctor->id }}"
                @selected((string) request('doctor_id') === (string) $doctor->id)>
                {{ $doctor->name }}
            </option>
        @endforeach
    </select>

    <select name="status">
        <option value="">Semua Status</option>
        @foreach ($statuses as $value => $label)
            <option value="{{ $value }}" @selected(request('status') === $value)>
                {{ $label }}
            </option>
        @endforeach
    </select>

    <input type="date" name="tanggal" value="{{ request('tanggal') }}">

    <select name="direction">
        <option value="desc" @selected(request('direction', 'desc') === 'desc')>Terbaru</option>
        <option value="asc" @selected(request('direction') === 'asc')>Terlama</option>
    </select>

    <button type="submit" class="btn btn-primary btn-sm">Terapkan</button>

    <a href="{{ route('pendaftaran.index') }}" class="btn btn-secondary btn-sm">Reset Filter</a>
</form>

@if (request('search'))
    <p>
        Hasil pencarian:
        <strong>{{ request('search') }}</strong>
    </p>
@endif

<p>
    Menampilkan {{ $registrations->count() }} dari {{ $registrations->total() }} data.
</p>

<table border="1" cellpadding="8">
    <thead>
        <tr>
            <th>No.</th>
            <th>Tanggal</th>
            <th>Pasien</th>
            <th>Dokter</th>
            <th>Keluhan</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($registrations as $registration)
            <tr>
                <td>{{ $registrations->firstItem() + $loop->index }}</td>
                <td>{{ $registration->registration_date }}</td>
                <td>{{ $registration->patient?->name ?? '-' }}</td>
                <td>{{ $registration->doctor?->name ?? '-' }}</td>
                <td>{{ $registration->complaint ?? '-' }}</td>
                <td>{{ $statuses[$registration->status] ?? $registration->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">
                    @if (request()->filled('search') || request()->filled('doctor_id') || request()->filled('status') || request()->filled('tanggal'))
                        Data pendaftaran tidak ditemukan.
                        <a href="{{ route('pendaftaran.index') }}">Reset filter</a>
                    @else
                        Belum ada data pendaftaran.
                    @endif
                </td>
            </tr>
        @endforelse
    </tbody>
</table>

<div class="mt-3">
    {{ $registrations->links('pagination::bootstrap-5') }}
</div>
@endsection