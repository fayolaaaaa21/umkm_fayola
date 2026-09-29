<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    // Halaman Home
    public function home()
    {
        return view('produk.home');
    }

    // Halaman Katalog & Pencarian
    public function index(Request $request)
    {
        $search = $request->get('search');
        $produks = Produk::when($search, function ($query, $search) {
            return $query->where('nama', 'like', "%{$search}%")
                         ->orWhere('kategori', 'like', "%{$search}%");
        })->get();

        return view('produk.index', compact('produks', 'search'));
    }

    // Halaman Detail Produk
    public function show($id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    // Halaman Admin CRUD
    public function admin()
    {
        $produks = Produk::all();
        return view('produk.admin', compact('produks'));
    }

    // Simpan Data
    public function store(Request $request)
    {
        $request->validate([
            'kode' => 'required|unique:produks,kode',
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        Produk::create($request->all());
        return redirect()->route('admin')->with('success', 'Produk berhasil ditambahkan.');
    }

    // Update Data
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);

        $request->validate([
            'kode' => 'required|unique:produks,kode,' . $id,
            'nama' => 'required',
            'kategori' => 'required',
            'harga' => 'required|numeric',
            'stok' => 'required|integer',
            'deskripsi' => 'required',
        ]);

        $produk->update($request->all());
        return redirect()->route('admin')->with('success', 'Produk berhasil diperbarui.');
    }

    // Hapus Data
    public function destroy($id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('admin')->with('success', 'Produk berhasil dihapus.');
    }
}