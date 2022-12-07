@extends('layouts.main')
@section('title')
    Tambah Data Pelanggaran
@endsection
@section('titlepage')
    Data Pelanggaran Siswa
@endsection
@section('content')
    <form class="card py-3 px-4 rounded" method="POST" action="/pelanggaran/store">
        @csrf
        <input type="text" name="siswa_id" value="{{ $siswa->id }}" hidden>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label for="poin" class="form-label">Poin</label>
            <input type="number" name="poin" class="form-control" id="poin" required>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" id="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control text-capitalize" name="keterangan" id="keterangan" required>
        </div>
        <button type="submit" class="btn btn-primary mt-2" style="max-width: 100px">Submit</button>
    </form>
@endsection
