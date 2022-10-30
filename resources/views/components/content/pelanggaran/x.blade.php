@extends('layouts.main')
@section('titlepage')
    Pelanggaran | X
@endsection
@section('title')
    Data Pelanggaran
@endsection
@section('content')
    <div class="card shadow-sm rounded-lg">
        <div class="card-title">
            <h5 class="pt-4 ml-4 mb-4">Pelanggaran | X</h5>
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
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                        <td>@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                        <td>@fat</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry the Bird</td>
                        <td>Larry the Bird</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                        <td>@twitter</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
