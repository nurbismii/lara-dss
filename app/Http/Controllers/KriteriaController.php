<?php

namespace App\Http\Controllers;

use App\Models\kriteria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

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
        $check = kriteria::all('nama');
        $arr = compact('check');

        for ($i = 0; $i < count($check); $i++) {
            $nama = $arr['check'][$i]['nama'];
            if ($request->nama == $nama) {
                Alert::info('Peringatan', 'Kriteria sudah ada');
                return redirect()->back();
            }
        }
        
        $datas = new kriteria();

        $request->validate([
            'nama' => ['required'],
            'atribut' => ['required'],
            'bobot' => ['required'],
        ]);

        $datas->nama = $request->nama;
        $datas->atribut = $request->atribut;
        $datas->bobot = $request->bobot;

        $datas->save();

        Alert::success('Berhasil', 'Kriteria telah ditambahkan');
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

        $request->validate([
            'nama' => ['required'],
        ]);

        $datas->nama = $request->nama;
        $datas->atribut = $request->atribut;
        if(empty($request->atribut)){
            $datas->atribut = $request->atribut_lama;
        }
        else{
            $datas->atribut = $request->atribut;
        }
        if (empty($request->bobot)) {
            $datas->bobot = $request->bobot_lama;
        } else {
            $datas->bobot = $request->bobot;
        }

        $datas->save();

        Alert::success('Berhasil', 'Kriteria telah diperbarui');
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

        Alert::success('Berhasil', 'Kriteria telah dihapus');
        return redirect('kriteria');
    }
}
