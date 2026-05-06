<?php

namespace App\Http\Controllers;

use App\Models\Bangunan;
use Illuminate\Http\Request;

class BangunanController extends Controller
{
    public function index()
    {
        $bangunans = Bangunan::all();
        return view('bangunans.index', compact('bangunans'));
    }

    public function create()
    {
        return view('bangunans.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'alamat' => 'required',
            'luas_kamar' => 'required|numeric',
            'jenis_kamar' => 'required|in:campuran,laki-laki,perempuan',
            'is_full' => 'required|boolean',
            'harga' => 'required|integer',
        ]);

        Bangunan::create($request->all());
        return redirect()->route('bangunans.index')->with('success', 'Data bangunan berhasil ditambahkan.');
    }

    public function edit(Bangunan $bangunan)
    {
        return view('bangunans.edit', compact('bangunan'));
    }

    public function update(Request $request, Bangunan $bangunan)
    {
        $request->validate([
            'alamat' => 'required',
            'luas_kamar' => 'required|numeric',
            'jenis_kamar' => 'required|in:campuran,laki-laki,perempuan',
            'is_full' => 'required|boolean',
            'harga' => 'required|integer',
        ]);

        $bangunan->update($request->all());
        return redirect()->route('bangunans.index')->with('success', 'Data bangunan berhasil diperbarui.');
    }

    public function destroy(Bangunan $bangunan)
    {
        $bangunan->delete();
        return redirect()->route('bangunans.index')->with('success', 'Data bangunan berhasil dihapus.');
    }
}