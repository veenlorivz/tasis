<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PelanggaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pelanggaran = [
            [
                "siswa_id" => 1,
                "poin" => 10,
                "keterangan" => "Tidak Memakasi Dasi"
            ],
            [
                "siswa_id" => 2,
                "poin" => 7,
                "keterangan" => "Terlambat"
            ],
            [
                "siswa_id" => 3,
                "poin" => 10,
                "keterangan" => "Tidak Memakasi Baju"
            ],
        ];

        foreach ($pelanggaran as $p) {
            \App\Models\Pelanggaran::create($p);
        }
    }
}
