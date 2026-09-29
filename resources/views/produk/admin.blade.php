@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2>Kelola Data Produk (Admin)</h2>
    <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalTambah">+ Tambah Produk</button>
</div>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<table class="table table-bordered align-middle">
    <thead class="table-light">
        <tr>
            <th>Kode</th>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach($produks as $p)
        <tr>
            <td>{{ $p->kode }}</td>
            <td>{{ $p->nama }}</td>
            <td>{{ $p->kategori }}</td>
            <td>Rp {{ number_format($p->harga, 0, ',', '.') }}</td>
            <td>{{ $p->stok }}</td>
            <td>
                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" onsubmit="return confirm('Hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-sm btn-danger">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="modalTambah" tabindex="-1">
    <div class="modal-dialog">
        <form action="{{ route('produk.store') }}" method="POST" class="modal-content">
            @csrf
            <div class="modal-header"><h5 class="modal-title">Tambah Produk</h5></div>
            <div class="modal-body">
                <input type="text" name="kode" class="form-control mb-2" placeholder="Kode Produk (misal: P009)" required>
                <input type="text" name="nama" class="form-control mb-2" placeholder="Nama Produk" required>
                <input type="text" name="kategori" class="form-control mb-2" placeholder="Kategori" required>
                <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
                <input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>
                <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi" required></textarea>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Simpan</button>
            </div>
        </form>
    </div>
</div>
@endsection