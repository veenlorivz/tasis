<?php

namespace App\Http\Controllers;

use App\Models\Pelanggaran;
use App\Models\Siswa;
use App\Models\Kelas;
use Illuminate\Http\Request;


class PelanggaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($kelas)
    {
        switch ($kelas) {
            case 'X':
                return view('components.content.pelanggaran.index', [
                    "data" => Kelas::where("nomor_kelas", "X")->with(['siswa'])->get()
                ]);
                break;
            case 'XI':
                return view('components.content.pelanggaran.index', [
                    "data" => Kelas::where("nomor_kelas", "XI")->with(['siswa'])->get()
                ]);
                break;
            case 'XII':
                return view('components.content.pelanggaran.index', [
                    "data" => Kelas::where("nomor_kelas", "XII")->with(['siswa'])->get()
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
        return view('components.content.pelanggaran.create', [
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
        $siswa = Siswa::where("id", $request->siswa_id)->first();
        $siswa->poin = $siswa->poin - $request->poin;
        $siswa->update();
        Pelanggaran::create([
            "siswa_id" => $request->siswa_id,
            "poin" => $request->poin,
            "tanggal" => $request->tanggal,
            "keterangan" => $request->keterangan
        ]);
        return redirect("/pelanggaran/detail/$siswa->id");
    }

    /**
     * Display the specified resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($siswa_id)
    {
        return view("components.content.pelanggaran.detail", [
            "siswa" => Siswa::where("id", $siswa_id)->with(["pelanggaran","kelas"])->first(),
            'pelanggaran' => Pelanggaran::where("siswa_id", $siswa_id)->orderBy("tanggal", 'desc')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit($pelanggaran_id)
    {
        return view('components.content.pelanggaran.update', [
            "pelanggaran" => Pelanggaran::where("id", $pelanggaran_id)->with('siswa')->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update($id_pelanggaran, Request $request)
    {
        $pelanggaran = Pelanggaran::where('id',$id_pelanggaran)->with('siswa')->first();
        $siswa = Siswa::find($pelanggaran->siswa->id);
        $siswa->poin = $siswa->poin + ($pelanggaran->poin - $request->poin);
        $siswa->update();
        $pelanggaran->poin = $request->poin;
        $pelanggaran->tanggal = $request->tanggal;
        $pelanggaran->keterangan = $request->keterangan;
        $pelanggaran->update();
        return redirect('/pelanggaran/detail/' . $pelanggaran->siswa->id);
    }

    /**
     * Remove the specified resource from storage.
     *     
     * @return \Illuminate\Http\Response
     */
    public function destroy($pelanggaran_id)
    {
        $pelanggaran =  Pelanggaran::with(["siswa"])->where("id", $pelanggaran_id)->first();
        $siswa = Siswa::where("id", $pelanggaran->siswa->id)->first();
        $siswa->poin = $siswa->poin + $pelanggaran->poin;
        $siswa->update();
        $pelanggaran->delete();

        return redirect("/pelanggaran/detail/" . $siswa->id);
    }
}
