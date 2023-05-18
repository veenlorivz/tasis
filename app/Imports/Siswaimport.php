<?php

namespace App\Imports;

use App\Models\Siswa;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class Siswaimport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Siswa([
            'nama' => $row['nama'],
            'nis' => $row['nis'],
            'kelas_id' => $row['kelas_id'],
            'poin' => $row['poin'],
            'izin' => $row['izin'],
            'alpha' => $row['alpha'],
            'sakit' => $row['sakit'],
        ]);
    }
}
