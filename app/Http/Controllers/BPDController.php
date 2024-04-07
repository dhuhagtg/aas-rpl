<?php

namespace App\Http\Controllers;

use App\Models\BPD;
use Illuminate\Http\Request;
use Inertia\Inertia;

class BPDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $bpd = BPD::all();
        return view('bpd.index', [
            'title' => 'Semua Anggota BPD',
            'bpd' => $bpd,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bpd.create', [
            'title' => 'Tambah Anggota BPD',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'nama.required' => 'Nama diisi',
            'jabatan.required' => 'Jabatan wajib diisi',

        ]);

        $data = $request->all();


        BPD::create($data);

        return redirect()->to('bpd')->with('success', 'Berhasil menambahkan data');
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
        $bpd = BPD::find($id);
        return view('bpd.edit', [
            'bpd' => $bpd,
            'title' => 'Edit BPD',
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
            'jabatan' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi.',
            'jabatan.required' => 'Jabatan wajib diisi.',
        ]);

        // Cari berita berdasarkan ID
        $bpd = BPD::findOrFail($id);



        // Update berita dengan data baru
        $bpd->update([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
        ]);

        return redirect()->route('bpd.index')->with('success', 'Berhasil mengubah bpd');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BPD $bpd)
    {
        $bpd->delete();

        return redirect('bpd')->with('success', 'Berhasil hapus berita');
    }
}
