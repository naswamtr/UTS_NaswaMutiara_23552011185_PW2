<?php

namespace App\Http\Controllers;

use App\Models\Matakuliah;
use App\Models\Jurusan;
use Illuminate\Http\Request;

class MatakuliahController extends Controller
{
    public function index()
    {
        $matakuliahs = Matakuliah::with('jurusan')->get();

        return view(
            'matakuliah.index',
            compact('matakuliahs')
        );
    }

    public function create()
    {
        $jurusans = Jurusan::all();

        return view(
            'matakuliah.create',
            compact('jurusans')
        );
    }

    public function store(Request $request)
    {
        $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
            'sks' => 'required',
            'jurusan_id' => 'required'
        ]);

        Matakuliah::create([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
            'jurusan_id' => $request->jurusan_id
        ]);

        return redirect()
            ->route('matakuliah.index')
            ->with('success','Data berhasil disimpan');
    }

    public function edit($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        $jurusans = Jurusan::all();

        return view(
            'matakuliah.edit',
            compact('matakuliah','jurusans')
        );
    }

    public function update(Request $request, $id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        $request->validate([
            'kode_matakuliah' => 'required',
            'nama_matakuliah' => 'required',
            'sks' => 'required',
            'jurusan_id' => 'required'
        ]);

        $matakuliah->update([
            'kode_matakuliah' => $request->kode_matakuliah,
            'nama_matakuliah' => $request->nama_matakuliah,
            'sks' => $request->sks,
            'jurusan_id' => $request->jurusan_id
        ]);

        return redirect()
            ->route('matakuliah.index');
    }

    public function destroy($id)
    {
        $matakuliah = Matakuliah::findOrFail($id);

        $matakuliah->delete();

        return redirect()
            ->route('matakuliah.index');
    }
}