<?php

namespace App\Http\Controllers;

use App\Models\himpunan;
use App\Models\kriteria;
use Illuminate\Http\Request;

class HimpunanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datas = kriteria::all();
        return view('himpunan.index', compact(
            'datas',
        ))->with('no');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $datas = kriteria::all();
        return view('himpunan.create', compact(
            'datas'
        ));
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
        $datas = new himpunan();
        $datas->kriteria_id = $request->kriteria_id;
        $datas->nama = $request->nama;
        $datas->nilai = $request->nilai;

        $datas->save();
        return redirect('himpunan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mengambil data di himpunan dimana jika kriteria id sama dengan atribut himpunan kriteria_id 
        $datas = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', $id)->get();
        return view('himpunan.show', compact(
            'datas',
        ))->with('no');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kriteria = kriteria::all();
        $datas = himpunan::findorFail($id);
        return view('himpunan.edit', compact(
            'kriteria',
            'datas'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $datas = himpunan::findorFail($id);
        $datas->kriteria_id = $request->kriteria_id;
        $datas->nama = $request->nama;
        $datas->nilai = $request->nilai;


        $datas->save();
        return redirect('himpunan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\himpunan  $himpunan
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $datas = himpunan::findorFail($id);
        $datas->delete();

        return redirect('himpunan');
    }
}
