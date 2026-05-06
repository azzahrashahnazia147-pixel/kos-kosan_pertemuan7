@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card shadow-sm border-0 p-4">
        <h4>Tambah Bangunan Baru</h4>
        <hr>
        <form action="{{ route('bangunans.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Alamat</label>
                <textarea name="alamat" class="form-control" required></textarea>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Luas Kamar (m²)</label>
                    <input type="number" step="0.01" name="luas_kamar" class="form-control" required>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Harga (Rp)</label>
                    <input type="number" name="harga" class="form-control" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label class="form-label">Jenis Kamar</label>
                    <select name="jenis_kamar" class="form-select">
                        <option value="campuran">Campuran</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="col-md-6 mb-3">
                    <label class="form-label">Status Kamar</label>
                    <select name="is_full" class="form-select">
                        <option value="0">Tersedia</option>
                        <option value="1">Penuh</option>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            <a href="{{ route('bangunans.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection