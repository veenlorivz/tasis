<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class AbsenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Absen  $absen
     * @return \Illuminate\Http\Response
     */
    public function show(Absen $absen)
    {
        //
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
    public function destroy(Absen $absen)
    {
        //
    }

    // x (sepuluh)
    public function sepuluh()
    {
        $bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'January', 'February', 'Maret', 'April', 'Mei', 'Juni'];
        return view('components.content.absen.x', [
            'kelas' => Kelas::where('nomor_kelas', 'X')->with('siswa')->get(),
            'bulan' => $bulan
        ]);
    }
    // xi (sebelas)
    public function sebelas()
    {
        $bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'January', 'February', 'Maret', 'April', 'Mei', 'Juni'];
        return view('components.content.absen.xi', [
            'kelas' => Kelas::where('nomor_kelas', 'XI')->with('siswa')->get(),
            'bulan' => $bulan
        ]);
    }
    // xii (duabelas)
    public function duabelas()
    {
        $bulan = ['Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember', 'January', 'February', 'Maret', 'April', 'Mei', 'Juni'];
        return view('components.content.absen.xii', [
            'kelas' => Kelas::where('nomor_kelas', 'XII')->with('siswa')->get(),
            'bulan' => $bulan
        ]);
    }
}