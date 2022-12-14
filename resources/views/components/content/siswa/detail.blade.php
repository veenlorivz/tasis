@extends('layouts.main')
@section('titlepage')
    Detail Siswa
@endsection
@section('title')
    Detail Siswa
@endsection
@section('content')
    <div class="card py-3 px-4">
        <div class="mb-3 row align-items-center">
            <label for="nama" class="col-sm-2 col-form-label">Nama Siswa</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="nama" value="{{ $siswa->nama }}">
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="nama" class="col-sm-2 col-form-label">Nis</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="nama" value={{ $siswa->nis }}>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="nama" class="col-sm-2 col-form-label">Kelas</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="nama"
                    value="{{ $siswa->kelas->nomor_kelas }} {{ $siswa->kelas->nama_jurusan }}">
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="poin" class="col-sm-2 col-form-label">Sisa Poin</label>
            <div class="col-sm-10 col-md-2">
                <input type="text" disabled class="form-control" id="poin" value={{ $siswa->poin }}>
            </div>
            <div class="col-md-2">
                @if ($siswa->poin <= 150 && $siswa->poin > 120)
                    <div class="btn px-4 text-bg-success" style="cursor: default;">Aman</div>
                @elseif ($siswa->poin <= 120 && $siswa->poin > 80)
                    <div class="btn px-4 text-bg-warning text-white" style="cursor: default;">Kurang Aman</div>
                @elseif ($siswa->poin <= 80 && $siswa->poin > 50)
                    <div class="btn px-4 text-bg-secondary" style="cursor: default;">Tidak Aman</div>
                @elseif ($siswa->poin <= 50)
                    <div class="btn px-4 text-bg-danger" style="cursor: default;">Bahaya</div>
                @endif
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="poin" class="col-sm-2 col-form-label">Izin</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="poin" value={{ $siswa->izin }}>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="poin" class="col-sm-2 col-form-label">Sakit</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="poin" value={{ $siswa->sakit }}>
            </div>
        </div>
        <div class="mb-3 row align-items-center">
            <label for="poin" class="col-sm-2 col-form-label">Alpha</label>
            <div class="col-sm-10">
                <input type="text" disabled class="form-control" id="poin" value={{ $siswa->alpha }}>
            </div>
        </div>
    </div>
    <div class="mb-3">
        <a href="/siswa/{{ $siswa->kelas->nomor_kelas }}" class="btn btn-dark mt-2 text-decoration-none px-3">&laquo; Kembali</a>
    </div>
    <div class="card">
        <ol class="list-group list-group-numbered">
            @foreach ($pelanggaran as $p)
                <li class="list-group-item d-flex justify-content-between align-items-start" style="margin-bottom: 1px">
                    <div class="ms-2 me-auto">
                        <div class="fw-bold">{{ date('j F Y', strtotime($p->tanggal)) }}</div>
                        Keterangan : {{ $p->keterangan }} <br>
                        Poin Yang Didapat : {{ $p->poin }}
                    </div>
                    <form class="ml-auto align-self-center mr-3" action="/pelanggaran/delete/{{ $p->id }}"
                        method="post">
                        @csrf
                        <button class="btn btn-danger" type="submit">
                            <i class="bi bi-trash fa-lg text-white"></i>
                        </button>
                    </form>
                </li>
            @endforeach
        </ol>
    </div>
@endsection
