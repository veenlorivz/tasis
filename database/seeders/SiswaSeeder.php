<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $siswa = [
            [
                "nama" => "Andi Suhadi",
                "nis" => "00012831",
                "kelas_id" => 1,
                "poin" => 150
            ],
            [
                "nama" => "Kevin Sanjaya",
                "nis" => "000318632",
                "kelas_id" => 2,
                "poin" => 150
            ],
            [
                "nama" => "Usep Sujajang",
                "nis" => "000321768",
                "kelas_id" => 3,
                "poin" => 150
            ],
        ];

        foreach ($siswa as $s ) {
            \App\Models\Siswa::create($s);
        }
    }
}
