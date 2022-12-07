@extends('layouts.main')
@section('title')
    Tambah Data Absensi
@endsection
@section('titlepage')
    Data Absensi Siswa
@endsection
@section('content')
    <form class="card py-3 px-4 rounded" method="POST" action="/absen/store">
        @csrf
        <input type="text" name="siswa_id" value="{{ $siswa->id }}" hidden>
        <div class="mb-3">
            <label for="nama" class="form-label">Nama Siswa</label>
            <input type="text" class="form-control" name="nama" id="nama" value="{{ $siswa->nama }}" readonly>
        </div>
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" id="tanggal" required>
        </div>
        <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <select class="form-select" aria-label="Default select example" name="keterangan" id="keterangan">
                <option hidden selected>Pilih Keterangan</option>
                <option value="izin">Izin</option>
                <option value="sakit">Sakit</option>
                <option value="alpha">Alpha</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary mt-2" style="max-width: 100px">Submit</button>
    </form>
@endsection
