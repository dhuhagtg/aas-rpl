<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $berita = Berita::orderBy('created_at', 'desc')->paginate(10);
        return view('berita.index', [
            'title' => 'Semua Berita',
            'berita' => $berita,
        ]);
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('berita.create', [
            'title' => 'Tambah Berita',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gambar' => 'required|image',
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.required' => 'Gambar wajib diisi',
            'gambar.image' => 'Gambar wajib diisi',
            'judul.required' => 'Judul wajib diisi',
            'deskripsi.required' => 'Deskripsi wajib diisi',

        ]);

        $data = $request->all();
        $data['slug'] = Str::slug($request->judul);
        $data['user_name'] = auth()->user()->nama;
        $data['gambar'] = $request->file('gambar')->store('berita', 'public');

        Berita::create($data);

        return redirect()->to('berita')->with('success', 'Berhasil menambahkan berita');
    }

    /**
     * Display the specified resource.
     */
    public function show(Berita $berita)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $berita = Berita::find($id);
        return view('berita.edit', [
            'berita' => $berita,
            'title' => 'Edit Berita',


        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id, Berita $berita)
    {
        $request->validate([
            'gambar' => 'nullable|image',
            'judul' => 'required',
            'deskripsi' => 'required',
        ], [
            'gambar.image' => 'File harus berupa gambar.',
            'judul.required' => 'Judul wajib diisi.',
            'deskripsi.required' => 'Deskripsi wajib diisi.',
        ]);

        // Cari berita berdasarkan ID
        $berita = Berita::findOrFail($id);

        // Simpan nama file gambar lama
        $oldGambar = $berita->gambar;

        // Periksa apakah ada file gambar baru yang diupload
        if ($request->hasFile('gambar')) {
            // Hapus gambar lama jika ada
            if ($oldGambar) {
                Storage::delete('public/' . $oldGambar);
            }

            // Simpan gambar baru
            $gambar = $request->file('gambar')->store('berita', 'public');
        } else {
            $gambar = $oldGambar;
        }

        // Update berita dengan data baru
        $berita->update([
            'gambar' => $gambar,
            'judul' => $request->judul,
            'deskripsi' => $request->deskripsi,
            'slug' => Str::slug($request->judul),
            'user_name' => auth()->user()->nama,
        ]);

        return redirect()->route('berita.index')->with('success', 'Berhasil mengubah berita');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Berita $berita)
    {
        Storage::delete('public/' . $berita->gambar);
        $berita->delete();

        return redirect('berita')->with('success', 'Berhasil hapus berita');
    }
}
