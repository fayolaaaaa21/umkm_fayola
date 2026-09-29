@extends('layouts.app')

@section('content')
<h2 class="mb-4">Katalog Produk</h2>

<form action="{{ route('katalog') }}" method="GET" class="mb-4">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Cari nama atau kategori..." value="{{ $search }}">
        <button class="btn btn-outline-primary" type="submit">Cari</button>
    </div>
</form>

<div class="row">
    @forelse($produks as $item)
        <div class="col-md-3 mb-4">
            <div class="card h-100 shadow-sm">
                <div class="card-body">
                    <span class="badge bg-secondary mb-2">{{ $item->kategori }}</span>
                    <h5 class="card-title">{{ $item->nama }}</h5>
                    <p class="card-text text-primary fw-bold">Rp {{ number_format($item->harga, 0, ',', '.') }}</p>
                    <p class="card-text small text-muted">Stok: {{ $item->stok }}</p>
                    <a href="{{ route('produk.detail', $item->id) }}" class="btn btn-sm btn-outline-primary w-100">Detail</a>
                </div>
            </div>
        </div>
    @empty
        <div class="col-12"><p class="text-center text-muted">Produk tidak ditemukan.</p></div>
    @endforelse
</div>
@endsection