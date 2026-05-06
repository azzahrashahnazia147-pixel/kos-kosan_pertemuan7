@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between mb-4">
        <h3>Daftar Bangunan</h3>
        <a href="{{ route('bangunans.create') }}" class="btn btn-primary">Tambah Bangunan</a>
    </div>

    <div class="table-responsive bg-white p-3 shadow-sm rounded">
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>Alamat</th>
                    <th>Luas</th>
                    <th>Jenis</th>
                    <th>Status</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bangunans as $b)
                <tr>
                    <td>{{ $b->alamat }}</td>
                    <td>{{ $b->luas_kamar }} m²</td>
                    <td><span class="badge bg-info text-dark">{{ ucfirst($b->jenis_kamar) }}</span></td>
                    <td>
                        {!! $b->is_full 
                            ? '<span class="text-danger">Penuh</span>' 
                            : '<span class="text-success">Tersedia</span>' !!}
                    </td>
                    <td>Rp {{ number_format($b->harga, 0, ',', '.') }}</td>
                    <td>
                        <a href="{{ route('bangunans.edit', $b->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('bangunans.destroy', $b->id) }}" method="POST" class="d-inline">
                            @csrf @method('DELETE')
                            <button class="btn btn-sm btn-danger" onclick="return confirm('Hapus data?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection