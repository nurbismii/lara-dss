<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;

class KriteriaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // Memanggil semua isi data di kriteria
        $datas = kriteria::all();
        return view('kriteria.index', compact(
            'datas'
        ))->with('no', ($request->input('page', 1) - 1) * 20);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //menampilkan view yang ada di kriteria
        return view('kriteria.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $datas = new kriteria();
        $datas->nama = $request->nama;
        $datas->atribut = $request->atribut;
        $datas->bobot = $request->bobot;

        $datas->save();

        return redirect('kriteria');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //Mengambil data sesuai id
        $datas = kriteria::findorFail($id);
        return view('kriteria.edit', compact(
            'datas'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //mengirim perubahan jika id sesuai
        $datas = kriteria::findorFail($id);
        $datas->nama = $request->nama;
        $datas->atribut = $request->atribut;
        $datas->bobot = $request->bobot;

        $datas->save();
        return redirect('kriteria');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kriteria  $kriteria
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //menghapus data
        $datas = kriteria::findOrFail($id);
        $datas->delete();

        return redirect('kriteria');
    }
}
