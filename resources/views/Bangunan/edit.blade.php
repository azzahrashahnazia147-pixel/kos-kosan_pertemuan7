@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 p-4">
        <h4>Edit Data Bangunan</h4>
        <hr>
        <form action="{{ route('bangunans.update', $bangunan->id) }}" method="POST">
            @csrf @method('PUT')
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required>{{ $bangunan->alamat }}</textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Luas Kamar (m²)</label>
                    <input type="number" step="0.01" name="luas_kamar" class="form-control" value="{{ $bangunan->luas_kamar }}" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" value="{{ $bangunan->harga }}" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Kamar</label>
                    <select name="jenis_kamar" class="form-select">
                        <option value="campuran" {{ $bangunan->jenis_kamar == 'campuran' ? 'selected' : '' }}>Campuran</option>
                        <option value="laki-laki" {{ $bangunan->jenis_kamar == 'laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                        <option value="perempuan" {{ $bangunan->jenis_kamar == 'perempuan' ? 'selected' : '' }}>Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status Kamar</label>
                    <select name="is_full" class="form-select">
                        <option value="0" {{ $bangunan->is_full == 0 ? 'selected' : '' }}>Tersedia</option>
                        <option value="1" {{ $bangunan->is_full == 1 ? 'selected' : '' }}>Penuh</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-success">Update Data</button>
            <a href="{{ route('bangunans.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection