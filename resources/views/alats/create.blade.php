@extends('layout.app')

@section('title', 'Tambah Data Alat')

@section('content')
    <h1>Tambah Data Alat</h1>

    <form action="{{ route('alats.store') }}" method="POST">
        @csrf

        <div>
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" value="{{ old('kode_barang') }}">
        </div>

        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ old('nama_barang') }}">
        </div>

        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" value="{{ old('kategori') }}">
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stok" value="{{ old('stok') }}">
        </div>

        <div>
            <label>Harga Sewa</label>
            <input type="number" name="harga_sewa" value="{{ old('harga_sewa') }}">
        </div>

        <div>
            <label>Kondisi</label>
            <select name="kondisi">
                <option value="">-- Pilih Kondisi --</option>
                <option value="Baik">Baik</option>
                <option value="Perlu Perbaikan">Perlu Perbaikan</option>
            </select>
        </div>

        <button type="submit">Simpan</button>
    </form>

    <a href="{{ route('alats.index') }}">Kembali</a>
@endsection
