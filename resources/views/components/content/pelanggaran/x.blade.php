@extends('layouts.main')
@section('titlepage')
    Pelanggaran | X
@endsection
@section('title')
    Data Pelanggaran
@endsection
@section('content')
    @foreach ($data as $d)
    <div class="card shadow-sm rounded-lg">
        <div class="card-title">
            <h5 class="pt-4 ml-4 mb-4">{{ $d->nomor_kelas }} {{ $d->nama_jurusan }}</h5>
            <hr>
        </div>
        <div class="card-body">
            <table class="table" style="margin-top: -20px;">
                <thead class="text-center">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama Siswa</th>
                        <th scope="col">Nis</th>
                        <th scope="col">Sisa Poin</th>
                        <th  scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    @foreach ($d->siswa as $siswa)                        
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $siswa->nama }}</td>
                            <td>{{ $siswa->nis }}</td>
                            <td>{{$siswa->poin }}</td>
                            <td>
                                <a href="" class="text-decoration-none">
                                    <i class="bi bi-plus-circle-fill text-info fa-2x mr-2 cursor-pointer text-decoration-none"></i>
                                </a>
                                <a href="" class="text-decoration-none">
                                    <i class="bi bi-arrow-right-circle-fill text-info fa-2x cursor-pointer "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    @endforeach
@endsection
