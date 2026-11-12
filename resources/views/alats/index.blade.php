@extends('layout.app')

@section('title', 'Data Alat')

@section('content')
    <h1>Data Alat Pendakian</h1>
    @if (session('success'))
        <td style="text-align: center; vertical-align: middle;">
            <div class="aksi" style="justify-content: center; align-items: center;">
    @endif
    <p>Daftar perlengkapan pendakian yang tersedia di PendakiRent.</p>
    <a href="{{ route('alats.create') }}">Tambah Data</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Kategori</th>
                <th>Stok</th>
                <th>Harga Sewa</th>
                <th>Kondisi</th>
                <th>Aksi</th>
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

                    <td>
                        <div class="aksi">
                            <a href="{{ route('alats.edit', $alat->id) }}" class="btn-edit">
                                Edit
                            </a>

                            <form action="{{ route('alats.destroy', $alat->id) }}" method="POST"
                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn-delete">Delete</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @empty
                <tr>
                    <td colspan="8">Belum ada data alat.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
