<?php

namespace App\Http\Controllers;
use App\Models\penduduk;
use Illuminate\Http\Request;

class PendudukController extends Controller
{
    public function index()
    {
        $data = penduduk::all();
        return view('penduduk.index', compact('data'));
    }

    public function create()
    {
        return view('penduduk.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'alamat' => 'required',
            'tgllhr' => 'date',
            'telpon' => 'required',
        ]);

        penduduk::create($request->all());

        return redirect()->route('penduduk.index')
                        ->with('success', 'Data berhasil ditambahkan.');
    }
}
