@extends('layout.app')

@section('title', 'Data Alat')

@section('content')
    <h1>Data Alat Pendakian</h1>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <p>Daftar perlengkapan pendakian yang tersedia di PendakiRent.</p>
    <a href="{{ route('alats.create') }}">Tambah Data</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Sewa</th>
                <th>Kondisi</th>
            </tr>
        </thead>

        <tbody>
            @forelse ($alats as $index => $alat)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $alat->kode_barang }}</td>
                    <td>{{ $alat->nama_barang }}</td>
                    <td>{{ $alat->kategori }}</td>
                    <td>{{ $alat->stok }}</td>
                    <td>Rp {{ number_format($alat->harga_sewa, 0, ',', '.') }}</td>
                    <td>{{ $alat->kondisi }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="7">Belum ada data alat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
