<?php

namespace App\Http\Controllers\Produk;

use App\Http\Controllers\Controller;
use App\Models\produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{


    public function index()
    {
        $produks = produk::all();
        return view('produk.tampilProduk', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Proses unggah foto jika ada
        $fotoPath = null;
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $fotoPath = 'asset/produk/' . uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('asset/produk'), $fotoPath);
        }

        // Simpan data produk
        Produk::create([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'foto' => $fotoPath,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('produk.index')->with('success', 'Produk berhasil ditambahkan.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $produk = produk::findOrFail($id);
        return view('produk.show', compact('produk'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'nama_produk' => 'required|string|max:255',
            'deskripsi' => 'nullable|string',
            'harga' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
        ]);

        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Proses unggah foto jika ada
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($produk->foto && file_exists(public_path($produk->foto))) {
                unlink(public_path($produk->foto));
            }

            // Simpan foto baru
            $file = $request->file('foto');
            $fotoPath = 'asset/produk/' . uniqid() . '_' . $file->getClientOriginalName();
            $file->move(public_path('asset/produk'), $fotoPath);

            // Update kolom foto
            $produk->foto = $fotoPath;
        }

        // Update data produk
        $produk->update([
            'nama_produk' => $request->nama_produk,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('produk.index', $produk->id)->with('success', 'Produk berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Hapus foto dari direktori jika ada
        if ($produk->foto && file_exists(public_path($produk->foto))) {
            unlink(public_path($produk->foto));
        }

        // Hapus data produk dari database
        $produk->delete();

        // Redirect dengan pesan sukses
        return redirect()->route('produk.create')->with('success', 'Produk berhasil dihapus.');
    }
}
