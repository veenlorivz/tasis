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
                "nama_jurusan" => "PPLG 1",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "PPLG 2",
            ],
            [
                "nomor_kelas" => "X",
                "nama_jurusan" => "DKV 2",
            ]
        ];

        foreach ($kelas as $k) {
            \App\Models\Kelas::create($k);
        }
    }
}
