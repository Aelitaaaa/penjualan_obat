<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obats = Obat::all();
        return view('obats.index', compact('obats'));
    }

    public function create()
    {
        return view('obats.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'jumlah_obat' => 'required|numeric',
        ]);

        Obat::create([
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'jumlah_obat' => $request->jumlah_obat,
            'total_harga_obat' => $request->harga_obat * $request->jumlah_obat,
        ]);

        return redirect()->route('obats.index');
    }

    public function show($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obats.show', compact('obat'));
    }

    public function edit($id)
    {
        $obat = Obat::findOrFail($id);
        return view('obats.edit', compact('obat'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_obat' => 'required',
            'harga_obat' => 'required|numeric',
            'jumlah_obat' => 'required|numeric',
        ]);

        $obat = Obat::findOrFail($id);
        $obat->update([
            'nama_obat' => $request->nama_obat,
            'harga_obat' => $request->harga_obat,
            'jumlah_obat' => $request->jumlah_obat,
            'total_harga_obat' => $request->harga_obat * $request->jumlah_obat,
        ]);

        return redirect()->route('obats.index');
    }

    public function destroy($id)
    {
        Obat::destroy($id);
        return redirect()->route('obats.index');
    }
}
