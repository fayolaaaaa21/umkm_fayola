@extends('layouts.app')

@section('content')
<div class="card max-w-lg mx-auto shadow-sm">
    <div class="card-header bg-primary text-white">
        <h4 class="mb-0">Detail Produk: {{ $produk->kode }}</h4>
    </div>
    <div class="card-body">
        <h3>{{ $produk->nama }}</h3>
        <p class="badge bg-info text-dark">{{ $produk->kategori }}</p>
        <h4 class="text-success">Rp {{ number_format($produk->harga, 0, ',', '.') }}</h4>
        <p><strong>Stok Tersedia:</strong> {{ $produk->stok }}</p>
        <hr>
        <p><strong>Deskripsi:</strong></p>
        <p>{{ $produk->deskripsi }}</p>
        <a href="{{ route('katalog') }}" class="btn btn-secondary">Kembali ke Katalog</a>
    </div>
</div>
@endsection