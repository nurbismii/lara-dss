<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use Illuminate\Http\Request;


class AlternatifController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $datas = alternatif::all();
        return view('alternatif.index', compact(
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
        //
        return view('alternatif.create');
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
        $model = new alternatif();
        $model->nim = $request->nim;
        $model->nama = $request->nama;
        $model->jurusan = $request->jurusan;

        $model->save();

        return redirect('alternatif');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $datas = alternatif::findOrFail($id);
        return view('alternatif.edit', compact(
            'datas'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datas = alternatif::findorFail($id);

        $datas->nim = $request->nim;
        $datas->nama = $request->nama;
        $datas->jurusan = $request->jurusan;

        $datas->save();

        return redirect('alternatif')->with('success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\alternatif  $alternatif
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datas = alternatif::findorFail($id);
        $datas->delete();
        return redirect('alternatif');
    }
}
