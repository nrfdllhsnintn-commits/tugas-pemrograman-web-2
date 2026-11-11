@extends('layout.app')

@section('title', 'Ubah Data Alat')

@section('content')
    <h1>Ubah Data Alat</h1>

    <form action="{{ route('alats.update', $alat->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div>
            <label>Kode Barang</label>
            <input type="text" name="kode_barang" value="{{ old('kode_barang', $alat->kode_barang) }}">
        </div>

        <div>
            <label>Nama Barang</label>
            <input type="text" name="nama_barang" value="{{ old('nama_barang', $alat->nama_barang) }}">
        </div>

        <div>
            <label>Kategori</label>
            <input type="text" name="kategori" value="{{ old('kategori', $alat->kategori) }}">
        </div>

        <div>
            <label>Stok</label>
            <input type="number" name="stok" value="{{ old('stok', $alat->stok) }}">
        </div>

        <div>
            <label>Harga Sewa</label>
            <input type="number" name="harga_sewa" value="{{ old('harga_sewa', $alat->harga_sewa) }}">
        </div>

        <div>
            <label>Kondisi</label>
            <select name="kondisi">
                <option value="Baik" {{ $alat->kondisi == 'Baik' ? 'selected' : '' }}>Baik</option>
                <option value="Perlu Perbaikan" {{ $alat->kondisi == 'Perlu Perbaikan' ? 'selected' : '' }}>Perlu Perbaikan
                </option>
            </select>
        </div>

        <button type="submit">Simpan Perubahan</button>
    </form>

    <a href="{{ route('alats.index') }}">Kembali</a>
@endsection
