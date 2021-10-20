<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\himpunan;
use App\Models\kriteria;
use App\Models\normalisasi;

class PenilaianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $alternatif = alternatif::all();

        $normalisasi = normalisasi::join('alternatifs', 'normalisasi.alter_id', '=', 'alternatifs.id')
            ->get(['normalisasi.*', 'alternatifs.nama']);
        $ipk = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 1)->get();
        $pot = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 3)->get();
        $tot = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 5)->get();
        $smt = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 4)->get();
        $ko = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 6)->get();

        //Cari max
        $max1 = normalisasi::max('C1');
        $max2 = normalisasi::max('C2');
        $max3 = normalisasi::max('C3');
        $max4 = normalisasi::max('C4');
        $max5 = normalisasi::max('C5');

        //Cari min
        $min1 = normalisasi::min('C1');
        $min2 = normalisasi::min('C2');
        $min3 = normalisasi::min('C3');
        $min4 = normalisasi::min('C4');
        $min5 = normalisasi::min('C5');

        $benefit = kriteria::where('atribut', 'benefit')->get();
        $cost = kriteria::where('atribut', 'cost')->get();

        $bobot_ipk = kriteria::find(1)->bobot;
        $bobot_penghasilanOrtu = kriteria::find(3)->bobot;
        $bobot_smt = kriteria::find(4)->bobot;
        $bobot_tanggunganOrtu = kriteria::find(5)->bobot;
        $bobot_organisasi = kriteria::find(6)->bobot;

        return view('dss.index', compact(
            'ipk',
            'pot',
            'tot',
            'smt',
            'ko',
            'alternatif',
            'normalisasi',

            'max1',
            'max2',
            'max3',
            'max4',
            'max5',

            'min1',
            'min2',
            'min3',
            'min4',
            'min5',

            'bobot_ipk',
            'bobot_penghasilanOrtu',
            'bobot_smt',
            'bobot_tanggunganOrtu',
            'bobot_organisasi',

            'benefit',
            'cost'

        ))->with('no');
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
        $model = new normalisasi();

        $model->alter_id = $request->alter_id;
        $model->c1 = $request->ipk;
        $model->c2 = $request->pot;
        $model->c3 = $request->tot;
        $model->c4 = $request->smt;
        $model->c5 = $request->ko;

        $model->save();

        return redirect('penilaian');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $alter = alternatif::all();

        $datas = normalisasi::findorFail($id);

        $ipk = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 1)->get();
        $pot = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 3)->get();
        $tot = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 5)->get();
        $smt = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 4)->get();
        $ko = kriteria::join('himpunans', 'kriterias.id', '=', 'himpunans.kriteria_id')
            ->where('kriterias.id', 6)->get();

        return view('dss.edit', compact(
            'datas',
            'alter',
            'ipk',
            'pot',
            'tot',
            'smt',
            'ko'
        ));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $model = normalisasi::findorFail($id);
        $model->delete();

        return redirect('penilaian');
    }
}
