@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('titlepage')
    Dashboard
@endsection
@section('dashboard', 'active')
@section('content')
<table class="table">
    <thead class="text-center">
        <tr>
            <th rowspan="2" scope="col">No</th>
            <th rowspan="2" scope="col">Nama Siswa</th>
            <th rowspan="2" scope="col">Nis</th>
            <th rowspan="2" scope="col">Izin</th>
            <th rowspan="2" scope="col">Sakit</th>
            <th rowspan="2" scope="col">Alpha</th>
            <th rowspan="2" scope="col">Total</th>
            <th scope="col">Aksi</th>
        </tr>
    </thead>
    <tbody class="text-center">

    </tbody>
</table>
@endsection
