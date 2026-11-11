<?php
namespace App\Http\Controllers;

use App\Models\Alat;
use Illuminate\Http\Request;

class AlatController extends Controller
{
    public function index()
    {
        $alats = Alat::all();

        return view('alats.index', compact('alats'));
    }

    public function create()
    {
        return view('alats.create');
    }

    public function edit($id)
    {
        $alat = Alat::findOrFail($id);

        return view('alats.edit', compact('alat'));
    }

    public function update(Request $request, $id)
    {
        $alat = Alat::findOrFail($id);

        $validated = $request->validate([
            'kode_barang' => 'required|unique:alats,kode_barang,' . $id,
            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer|min:0',
            'harga_sewa' => 'required|numeric|min:0',
            'kondisi' => 'required',
        ]);

        $alat->update($validated);

        return redirect()->route('alats.index')
            ->with('success', 'Data alat berhasil diubah.');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kode_barang' => 'required|unique:alats,kode_barang',
            'nama_barang' => 'required',
            'kategori' => 'required',
            'stok' => 'required|integer|min:0',
            'harga_sewa' => 'required|numeric|min:0',
            'kondisi' => 'required',
        ]);

        Alat::create($validated);

        return redirect()->route('alats.index')
            ->with('success', 'Data alat berhasil ditambahkan.');
    }
}
