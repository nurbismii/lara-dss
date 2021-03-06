<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\alternatif;
use App\Models\kriteria;
use App\Models\normalisasi;
use Exception;
use RealRashid\SweetAlert\Facades\Alert;

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

        //Join table antar normalisasi dan alternatif
        $normalisasi = normalisasi::join('alternatifs', 'normalisasi.alter_id', '=', 'alternatifs.id')
            ->get(['normalisasi.*', 'alternatifs.nama']);

        //Join table antar kriteria dan himpunan
        // Untuk mengambil nilai dan menampilkan nama sesuai id
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

        //mengambil nilai bobot sesuai dengan ID
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

            'atr1',
            'atr2',
            'atr3',
            'atr4',
            'atr5',

            'c1',
            'c2',
            'c3',
            'c4',
            'c5',

            'bobot_ipk',
            'bobot_penghasilanOrtu',
            'bobot_smt',
            'bobot_tanggunganOrtu',
            'bobot_organisasi',

        ))->with('no',);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Cek data di database apakah sudah ada atau belum
        $check = normalisasi::all('alter_id');
        $arr = compact('check');

        for ($i = 0; $i < count($check); $i++) {
            $id = $arr['check'][$i]['alter_id'];
            if ($request->alter_id == $id) {
                Alert::info('Peringatan', 'Alternatif sudah ada');
                return redirect()->back();
            }
        }

        $model = new normalisasi();

        $request->validate([
            'alter_id' => ['required'],
            'ipk' => ['required'],
            'pot' => ['required'],
            'smt' => ['required'],
            'jtot' => ['required'],
            'organisasi' => ['required'],
        ]);

        $model->alter_id = $request->alter_id;
        $model->c1 = $request->ipk;
        $model->c2 = $request->pot;
        $model->c3 = $request->smt;
        $model->c4 = $request->jtot;
        $model->c5 = $request->organisasi;

        $model->save();

        Alert::success('Berhasil', 'Alternatif telah ditambahkan');
        return redirect('penilaian');
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
        try {
            $data = normalisasi::find($id);
            $data->delete();
            Alert::success('Berhasil', 'Alternatif telah ditambahkan');
            return redirect()->back();
        } catch (Exception $e) {
            Alert::warning('Informasi', 'Data telah beralasi, hapus hasil perhitungan terlebih dahulu');
            return redirect()->back();
        }
    }
}
