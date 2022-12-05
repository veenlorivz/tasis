@extends('layouts.main')
@section('title')
    Ubah Data Pelanggaran
@endsection
@section('titlepage')
    Ubah Data Pelanggaran Siswa
@endsection
@section('content')
    <form class="card py-3 px-4 rounded" method="POST" action="/pelanggaran/update/{{ $pelanggaran->id }}">
        @csrf
        @method("PUT")
        <input type="text" name="siswa_id" value="{{ $pelanggaran->siswa->id }}" hidden>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $pelanggaran->siswa->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label for="poin" class="form-label">Poin</label>
            <input type="number" name="poin" class="form-control" id="poin" value="{{ $pelanggaran->poin }}">
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" value="{{ $pelanggaran->tanggal }}">
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control" name="keterangan" id="keterangan" value="{{ $pelanggaran->keterangan }}">
        </div>
        <div class="mt-2">
            <a href="/pelanggaran/detail/{{$pelanggaran->id}}" class="btn btn-dark mr-2">&laquo; Kembali</a>
            <button type="submit" class="btn btn-primary" style="max-width: 100px">Submit</button>
        </div>
    </form>
@endsection
