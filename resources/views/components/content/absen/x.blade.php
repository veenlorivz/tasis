@extends('layouts.main')
@section('titlepage')
    Absensi | X
@endsection
@section('title')
    Data Absensi
@endsection
@section('content')
    <div class="card shadow-sm rounded-lg">
        <div class="card-title">
            <h5 class="pt-4 ml-4 mb-4">Absensi | X</h5>
            <hr>
        </div>
        <div class="card-body">
            <table class="table" style="margin-top: -20px;" border="1">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2" scope="col">No</th>
                        <th rowspan="2" scope="col">Nama Siswa</th>
                        <th rowspan="2" scope="col">Jurusan</th>
                        <th colspan="3" scope="col" class="text-center">Keterangan</th>
                        <th rowspan="2" scope="col">Total</th>
                    </tr>
                    <tr>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Alpha</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absen as $abs)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $abs->siswa_id }}</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
