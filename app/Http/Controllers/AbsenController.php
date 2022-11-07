<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kelas)
    {
        $bulan = ['July', 'August', 'September', 'October', 'November', 'December', 'January', 'February', 'March', 'April', 'May', 'June'];
        switch ($kelas) {
            case 'X':
                return view('components.content.absen.index', [
                    'data' => Kelas::where('nomor_kelas', 'X')->with('siswa')->get(),
                    'absen' => Absen::with('siswa')->get(),
                    'bulan' => $bulan
                ]);
                break;
            case 'XI':
                return view('components.content.absen.index', [
                    'data' => Kelas::where('nomor_kelas', 'XI')->with('siswa')->get(),
                    'bulan' => $bulan
                ]);
                break;
            case 'XII':
                return view('components.content.absen.index', [
                    'data' => Kelas::where('nomor_kelas', 'XII')->with('siswa')->get(),
                    'bulan' => $bulan
                ]);
                break;
            default:
                return $kelas;
                break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($siswa_id)
    {
        return view('components.content.absen.create', [
            "siswa" => Siswa::where("id", $siswa_id)->first()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $siswa = Siswa::where('id', $request->siswa_id)->first();
        Absen::create($request->all());
        $siswa->izin = $request->keterangan == "izin" ? $siswa->izin + 1 : $siswa->izin;
        $siswa->alpha = $request->keterangan == "alpha" ? $siswa->alpha + 1 : $siswa->alpha;
        $siswa->sakit = $request->keterangan == "sakit" ? $siswa->sakit + 1 : $siswa->sakit;
        $siswa->update();
        return redirect("/absen/detail/$siswa->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show($siswa_id)
    {
        return view("components.content.absen.detail", [
            "siswa" => Siswa::where("id", $siswa_id)->with("absen")->first(),
            'absen' => Absen::where("siswa_id", $siswa_id)->orderBy("tanggal", 'desc')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function destroy($absen_id)
    {
        $absen = Absen::with(['siswa'])->where('keterangan', $absen_id)->first();
        $siswa = Siswa::where("id", $absen->siswa->id)->get();
        if($absen->keterangan === 'izin'){
            $siswa->izin = $siswa->izin - 1;
        }elseif ($absen->keterangan === "sakit") {
            $siswa->sakit = $siswa->sakit - 1;
        }elseif ($absen->keterangan === "alpha") {
            $siswa->alpha = $siswa->alpha - 1;
        }
        $siswa->update();
        $absen->delete();
        return redirect('/absen/detail/' . $siswa->id);
    }
}