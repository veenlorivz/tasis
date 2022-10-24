<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AbsenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $absen = [
            [
                "siswa_id" => 1,
                "hari" => date("Y-m-d"),
                "keterangan" => "izin",
            ],
            [
                "siswa_id" => 2,
                "hari" => date("Y-m-d"),
                "keterangan" => "sakit",
            ],
            [
                "siswa_id" => 3,
                "hari" => date("Y-m-d"),
                "keterangan" => "alpha",
            ],
        ];

        foreach ($absen as $a ) {
            \App\Models\Absen::create($a);
        }
    }
}
