<?php

namespace App\Http\Controllers;

use App\Models\alternatif;
use App\Models\Hasil;
use App\Models\himpunan;
use App\Models\kriteria;
use App\Models\normalisasi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $alternatif = alternatif::all('id');
        $kriteria = kriteria::all('id');
        $himpunan = himpunan::all('id');
        $normalisasi = normalisasi::all('id');

        //Cek atribut
        $atr1 = kriteria::find(1)->atribut;
        $atr2 = kriteria::find(3)->atribut;
        $atr3 = kriteria::find(4)->atribut;
        $atr4 = kriteria::find(5)->atribut;
        $atr5 = kriteria::find(6)->atribut;

        $c1 = 0;
        $c2 = 0;
        $c3 = 0;
        $c4 = 0;
        $c5 = 0;

        $datas = Hasil::join('normalisasi', 'hasils.normalisasi_id', '=', 'normalisasi.id')
            ->join('alternatifs', 'normalisasi.alter_id', '=', 'alternatifs.id')
            ->get(['hasils.*', 'normalisasi.*', 'alternatifs.nama'])
            ->sortByDesc('hasil');

        return view('home.home', compact(
            'alternatif',
            'kriteria',
            'himpunan',
            'normalisasi',

            'datas',

            'atr1',
            'atr2',
            'atr3',
            'atr4',
            'atr5',

        ))->with('no');
    }
}
