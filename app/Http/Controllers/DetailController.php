<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Detail;
use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DetailController extends Controller
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
                return view('components.content.detail.index', [
                    'data' => Kelas::where('nomor_kelas', 'X')->with(['siswa'])->get(),
                ]);
                break;
            case 'XI':
                return view('components.content.detail.index', [
                    'data' => Kelas::where('nomor_kelas', 'XI')->with(['siswa'])->get(),
                ]);
                break;
            case 'XII':
                return view('components.content.detail.index', [
                    'data' => Kelas::where('nomor_kelas', 'XII')->with(['siswa'])->get(),
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
    public function create()
    {
        //
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
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function show($siswa_id)
    {
        return view('components.content.detail.detail', [
            'siswa' => Siswa::where('id', $siswa_id)->with(['siswa'])->first(),
            'absen' => Absen::where("siswa_id", $siswa_id)->orderBy("tanggal", 'desc')->get()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function edit(Detail $detail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Detail $detail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Detail  $detail
     * @return \Illuminate\Http\Response
     */
    public function destroy(Detail $detail)
    {
        //
    }
}