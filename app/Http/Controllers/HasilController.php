<?php

namespace App\Http\Controllers;

use App\Models\Hasil;
use App\Models\kriteria;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HasilController extends Controller
{
    public function index()
    {
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
            ->get(['normalisasi.*', 'hasils.*',  'alternatifs.nama'])
            ->sortByDesc('hasil');

        return view('hasil.index', compact(
            'datas',

            'atr1',
            'atr2',
            'atr3',
            'atr4',
            'atr5',
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
        $normalisasi_id = $request->normalisasi_id;
        $hasil = $request->hasil;

        $count = hasil::count();

        if ($count == 0) {
            for ($i = 0; $i < count($normalisasi_id); $i++) {
                $datas[] = [
                    'normalisasi_id' => $normalisasi_id[$i],
                    'hasil' => $hasil[$i]
                ];
            }
            hasil::insert($datas);
            Alert::success('Berhasil', 'Hasil perhitungan telah disimpan');
            return redirect('hasil');
        } else {
            for ($i = 0; $i < count($normalisasi_id); $i++) {
                $cek = Hasil::where('normalisasi_id', $normalisasi_id[$i])->first();
                if ($cek === null) {
                    $datas[] = [
                        'normalisasi_id' => $normalisasi_id[$i],
                        'hasil' => $hasil[$i]
                    ];
                    hasil::insert($datas);
                    Alert::success('Berhasil', 'Hasil perhitungan telah disimpan');
                    return redirect('hasil');
                }
            }
            Alert::warning('Gagal', 'Perhitungan hasil akhir telah ada');
            return redirect()->back();
        }
    }
    public function destroy($id)
    {

        $datas = hasil::find($id);
        $datas->delete();
        Alert::warning('Berhasil', 'Data telah dihapus');
        return redirect()->back();
    }

    public function truncate()
    {
        $hasil = hasil::all();
        foreach ($hasil as $e) {
            $e->delete();
        }
        Alert::warning('Berhasil', 'Data telah dihapus');
        return redirect()->back();
    }
}
