@extends('template.header')
@section('title', "Input Data Produk")
@section('content')
    <div class="container mx-auto bg-white border-blue-400 rounded-lg shadow-2xl mt-8">
        <div class="w-2/4 mx-auto text-center mt-8 mb-2">
            <h2 class="text-2xl font-bold mb-6">Tambah Data Produk</h2>
            <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-4">
                    <label for="nama" class="block text-left font-medium text-gray-700">Nama Produk</label>
                    <input type="text" name="nama_produk" id="nama" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan nama produk" required>
                </div>

                <div class="mb-4">
                    <label for="deskripsi" class="block text-left font-medium text-gray-700">Deskripsi Produk</label>
                    <textarea name="deskripsi" id="deskripsi" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan deskripsi produk"></textarea>
                </div>

                <div class="mb-4">
                    <label for="harga" class="block text-left font-medium text-gray-700">Harga Produk</label>
                    <input type="number" name="harga" id="harga" class="w-full p-2 border border-gray-300 rounded mt-1" placeholder="Masukkan harga produk" required>
                </div>

                <div class="mb-6">
                    <label for="foto" class="block text-left font-medium text-gray-700">Foto Produk</label>
                    <input type="file" name="foto" id="foto" class="w-full p-2 border border-gray-300 rounded mt-1" accept="image/*">
                </div>

                <div class="text-center">
                    <button type="submit" class="mb-5 bg-slate-500 text-white px-4 py-2 rounded hover:bg-blue-600">Simpan Produk</button>
                </div>
            </form>
        </div>
    </div>
@endsection
