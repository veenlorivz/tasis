@extends('layouts.main')
@section('titlepage')
    Detail Data Siswa
@endsection
@section('title')
    Data Siswa Detail
@endsection
@section('content')
    @foreach ($data as $d)
        <div class="accordion shadow-sm rounded-lg" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="s{{ $d->id }}-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#s{{ $d->id }}-collapseTwo" aria-expanded="false"
                        aria-controls="s{{ $d->id }}-collapseTwo">
                        {{ $d->nomor_kelas }} {{ $d->nama_jurusan }}
                    </button>
                </h2>
                <div id="s{{ $d->id }}-collapseTwo" class="accordion-collapse collapse"
                    aria-labelledby="s{{ $d->id }}-headingTwo">
                    <div class="accordion-body">
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Nama Siswa</th>
                                    <th scope="col">Nis</th>
                                    <th scope="col">Poin</th>
                                    <th scope="col">Izin</th>
                                    <th scope="col">Sakit</th>
                                    <th scope="col">Alpha</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($d->siswa as $siswa)
                                    <tr>
                                        <th scope="row">{{ $loop->iteration }}</th>
                                        <td>{{ $siswa->nama }}</td>
                                        <td>{{ $siswa->nis }}</td>
                                        <td>{{ $siswa->poin }}</td>
                                        <td>{{ $siswa->izin }}</td>
                                        <td>{{ $siswa->sakit }}</td>
                                        <td>{{ $siswa->alpha }}</td>
                                        <td>
                                            <a href="/siswa/detail/{{ $siswa->id }}" class="text-decoration-none">
                                                <i
                                                    class="bi bi-arrow-right-circle-fill text-info fa-2x cursor-pointer "></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection
