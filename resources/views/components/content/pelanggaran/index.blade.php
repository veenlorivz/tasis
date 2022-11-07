@extends('layouts.main')
@section('titlepage')
    Pelanggaran
@endsection
@section('title')
    Data Pelanggaran
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
                                    <th scope="col">Sisa Poin</th>
                                    <th scope="col">Alert</th>
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
                                        @if ($siswa->poin >= 150)
                                            <td>
                                                <div class="badge text-bg-primary">Aman</div>
                                            </td>
                                        @elseif ($siswa->poin >= 120)
                                            <td>
                                                <div class="badge text-bg-warning">Kurang Aman</div>
                                            </td>
                                        @elseif ($siswa->poin >= 80)
                                            <td>
                                                <div class="badge text-bg-secondary">Tidak Aman</div>
                                            </td>
                                        @elseif ($siswa->poin >= 50)
                                            <td>
                                                <div class="badge text-bg-danger">Bahaya</div>
                                            </td>
                                        @endif
                                        <td>
                                            <a href="/pelanggaran/add/{{ $siswa->id }}" class="text-decoration-none">
                                                <i
                                                    class="bi bi-plus-circle-fill text-info fa-2x mr-2 cursor-pointer text-decoration-none"></i>
                                            </a>
                                            <a href="/pelanggaran/detail/{{ $siswa->id }}" class="text-decoration-none">
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
