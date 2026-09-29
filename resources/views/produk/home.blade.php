@extends('layouts.app')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3 text-center">
    <div class="container-fluid py-3">
        <h1 class="display-5 fw-bold">Katalog UMKM Siswa SMK</h1>
        <p class="fs-5 text-muted">Platform showcase karya dan produk unggulan buatan siswa-siswi SMK secara profesional.</p>
        <a href="{{ route('katalog') }}" class="btn btn-primary btn-lg mt-3">Lihat Katalog Produk</a>
    </div>
</div>
@endsection