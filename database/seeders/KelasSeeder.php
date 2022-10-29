<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kelas = [
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "Pemasaran",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "AKL",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "DKV 2",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "DKV 1",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "PPLG 2",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "PPLG 1",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "MPLB",
            ],

            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "Pemasaran",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "AKL",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "DKV 2",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "DKV 1",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "PPLG 2",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "PPLG 1",
            ],
            [
                "nomor_kelas" => "XI",
                "nama_jurusan" => "MPLB",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "BDP",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "AKL",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "OTKP 2",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "OTKP 1",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "Multimedia",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "RPL 2",
            ],
            [
                "nomor_kelas" => "XII",
                "nama_jurusan" => "RPL 1",
            ],
        ];

        foreach ($kelas as $k) {
            \App\Models\Kelas::create($k);
        }
    }
}