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
                return view('components.content.pelanggaran.x.index', [
                    "data" => Kelas::where("nomor_kelas", "X")->with(['siswa'])->get()
                ]);
                break;
            case 'XI':
                return view('components.content.pelanggaran.xi.index', [
                    "data" => Kelas::where("nomor_kelas", "XI")->with(['siswa'])->get()
                ]);
                break;
            case 'XII':
                return view('components.content.pelanggaran.xii.index', [
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
        return view('components.content.pelanggaran.x.create', [
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
            "keterangan" => $request->keterangan
        ]);
        return redirect("/pelanggaran/X");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function show(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelanggaran $pelanggaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelanggaran  $pelanggaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelanggaran $pelanggaran)
    {
        //
    }
    // x (sepuluh)
    public function sepuluh()
    {
        
    }
    // xi (sebelas)
    public function sebelas()
    {
        return view('components.content.pelanggaran.xi');
    }
    // xii (duabelas)
    public function duabelas()
    {
        return view('components.content.pelanggaran.xii');
    }
}