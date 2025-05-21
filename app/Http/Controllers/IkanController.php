<?php

namespace App\Http\Controllers;

use App\Models\Ikan;
use App\Models\JenisIkan;
use App\Models\JenisAir;
use App\Models\AsalIkan;
use Illuminate\Http\Request;

class IkanController extends Controller
{
    public function index()
    {
        $ikan = Ikan::with(['jenisIkan', 'jenisAir', 'asalIkan'])->get();
        return view('ikan.index', compact('ikan'));
    }

    public function create()
    {
        $jenisIkan = JenisIkan::all();
        $jenisAir = JenisAir::all();
        $asalIkan = AsalIkan::all();
        return view('ikan.create', compact('jenisIkan', 'jenisAir', 'asalIkan'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama_ikan' => 'required|string|max:255',
            'jenis_ikan_id' => 'required|exists:jenis_ikan,id',
            'jenis_air_id' => 'required|exists:jenis_air,id',
            'asal_ikan_id' => 'required|exists:asal_ikan,id',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0',
        ]);

        Ikan::create($data);
        return redirect()->route('ikan.index')->with('success', 'Fish added successfully.');
    }

    public function edit(Ikan $ikan)
    {
        $jenisIkan = JenisIkan::all();
        $jenisAir = JenisAir::all();
        $asalIkan = AsalIkan::all();
        return view('ikan.edit', compact('ikan', 'jenisIkan', 'jenisAir', 'asalIkan'));
    }

    public function update(Request $request, Ikan $ikan)
    {
        $data = $request->validate([
            'nama_ikan' => 'required|string|max:255',
            'jenis_ikan_id' => 'required|exists:jenis_ikan,id',
            'jenis_air_id' => 'required|exists:jenis_air,id',
            'asal_ikan_id' => 'required|exists:asal_ikan,id',
            'stok' => 'required|integer|min:0',
            'harga' => 'required|numeric|min:0',
        ]);

        $ikan->update($data);
        return redirect()->route('ikan.index')->with('success', 'Fish updated successfully.');
    }

    public function destroy(Ikan $ikan)
    {
        $ikan->delete();
        return redirect()->route('ikan.index')->with('success', 'Fish deleted successfully.');
    }
}