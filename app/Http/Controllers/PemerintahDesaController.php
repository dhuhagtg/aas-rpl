<?php

namespace App\Http\Controllers;

use App\Models\PemerintahDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;

class PemerintahDesaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemerintah_desa = PemerintahDesa::all();
        return view('pemerintah_desa.index', [
            'title' => 'Pemerintah Desa',
            'pemerintah_desa' => $pemerintah_desa,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemerintah_desa.create', [
            'title' => 'Tambah Perangkat Desa',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'foto' => 'required|image',
            'jabatan' => 'required',


        ], [

            'nama.required' => 'Nama wajib diisi',
            'foto.image' => 'Foto wajib diisi',
            'jabatan.required' => 'Jabatan wajib diisi',


        ]);

        $data = $request->all();
        $data['foto'] = $request->file('foto')->store('pemerintah_desa', 'public');


        PemerintahDesa::create($data);

        return redirect()->to('pemerintah_desa')->with('success', 'Berhasil menambahkan data');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemerintah_desa = PemerintahDesa::find($id);
        return view('pemerintah_desa.edit', [
            'pemerintah_desa' => $pemerintah_desa,
            'title' => 'Edit Pemerintah Desa',


        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'foto' => 'nullable|image',
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'foto.image' => 'Foto harus berupa gambar.',
            'nama.required' => 'Nama wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
        ]);

        // Cari berita berdasarkan ID
        $pemerintah_desa = PemerintahDesa::findOrFail($id);

        // Simpan nama file gambar lama
        $oldFoto = $pemerintah_desa->foto;

        // Periksa apakah ada file gambar baru yang diupload
        if ($request->hasFile('foto')) {
            // Hapus gambar lama jika ada
            if ($oldFoto) {
                Storage::delete('public/' . $oldFoto);
            }

            // Simpan gambar baru
            $foto = $request->file('foto')->store('pemerintah_desa', 'public');
        } else {
            $foto = $oldFoto;
        }

        // Update berita dengan data baru
        $pemerintah_desa->update([
            'foto' => $foto,
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,

        ]);

        return redirect()->route('pemerintah_desa.index')->with('success', 'Berhasil mengubah data');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PemerintahDesa $pemerintah_desa)
    {
        Storage::delete('public/' . $pemerintah_desa->foto);
        $pemerintah_desa->delete();

        return redirect('pemerintah_desa')->with('success', 'Berhasil hapus pegawai');
    }
}
