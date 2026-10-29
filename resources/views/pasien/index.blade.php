@extends('layouts.app')

@section('title', 'Data Pasien')

@section('content')
@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <i class="bi bi-check-circle me-2"></i>{{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Tutup"></button>
    </div>
@endif

<div class="card shadow-sm border-0">
    <div class="card-header bg-body d-flex justify-content-between align-items-center py-3">
        <h5 class="mb-0 fw-semibold">Daftar Pasien</h5>
        <a href="{{ route('pasien.create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-lg me-1"></i> Tambah Pasien
        </a>
    </div>

    <div class="card-body border-bottom">
        <form method="GET" action="{{ route('pasien.index') }}" class="row g-2 align-items-end">
            <div class="col-lg-4">
                <label class="form-label small text-muted mb-1">Cari</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-search"></i></span>
                    <input type="text"
                           name="search"
                           class="form-control"
                           value="{{ request('search') }}"
                           placeholder="Nama / No. RM">
                </div>
            </div>

            <div class="col-lg-2 col-md-6">
                <label class="form-label small text-muted mb-1">Jenis Kelamin</label>
                <select name="gender" class="form-select">
                    <option value="">Semua Gender</option>
                    <option value="L" @selected(request('gender') === 'L')>Laki-laki</option>
                    <option value="P" @selected(request('gender') === 'P')>Perempuan</option>
                </select>
            </div>

            <div class="col-lg-2 col-md-6">
                <label class="form-label small text-muted mb-1">Urutkan</label>
                <select name="sort" class="form-select">
                    <option value="name" @selected(request('sort', 'name') === 'name')>Nama</option>
                    <option value="created_at" @selected(request('sort') === 'created_at')>Tanggal Input</option>
                </select>
            </div>

            <div class="col-lg-2 col-md-6">
                <label class="form-label small text-muted mb-1">Arah</label>
                <select name="direction" class="form-select">
                    <option value="asc" @selected(request('direction', 'asc') === 'asc')>Naik (A-Z / terlama)</option>
                    <option value="desc" @selected(request('direction') === 'desc')>Turun (Z-A / terbaru)</option>
                </select>
            </div>

            <div class="col-lg-auto col-md-6 d-flex gap-2">
                <button type="submit" class="btn btn-primary">
                    <i class="bi bi-funnel me-1"></i> Terapkan
                </button>
                <a href="{{ route('pasien.index') }}" class="btn btn-outline-secondary">
                    <i class="bi bi-arrow-counterclockwise me-1"></i> Reset
                </a>
            </div>
        </form>
    </div>

    <div class="card-body py-2 d-flex flex-wrap justify-content-between align-items-center gap-2">
        <small class="text-muted">
            Menampilkan {{ $patients->count() }} dari {{ $patients->total() }} data.
        </small>

        @if (request('search'))
            <small>
                Hasil pencarian: <strong>{{ request('search') }}</strong>
            </small>
        @endif
    </div>

    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th style="width: 60px">No.</th>
                    <th>No. Rekam Medis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telepon</th>
                    <th class="text-end">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($patients as $patient)
                    <tr>
                        <td>{{ $patients->firstItem() + $loop->index }}</td>
                        <td><span class="fw-semibold">{{ $patient->medical_record_number }}</span></td>
                        <td>{{ $patient->name }}</td>
                        <td>
                            @if ($patient->gender === 'L')
                                <span class="badge text-bg-primary">Laki-laki</span>
                            @else
                                <span class="badge text-bg-info">Perempuan</span>
                            @endif
                        </td>
                        <td>{{ $patient->address ?? '-' }}</td>
                        <td>{{ $patient->phone ?? '-' }}</td>
                        <td class="text-end text-nowrap">
                            <a href="{{ route('pasien.edit', $patient->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>

                            <form action="{{ route('pasien.destroy', $patient->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Hapus data pasien?')">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="text-center text-muted py-5">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            @if (request('search') || request('gender'))
                                Data pasien tidak ditemukan.
                                <div class="mt-2">
                                    <a href="{{ route('pasien.index') }}" class="btn btn-sm btn-outline-secondary">
                                        Reset filter
                                    </a>
                                </div>
                            @else
                                Belum ada data pasien.
                            @endif
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    @if ($patients->hasPages())
        <div class="card-footer bg-body">
            {{ $patients->links('pagination::bootstrap-5') }}
        </div>
    @endif
</div>
@endsection