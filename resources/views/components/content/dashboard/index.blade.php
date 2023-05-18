@extends('layouts.main')
@section('title')
    Dashboard
@endsection
@section('titlepage')
    Dashboard
@endsection
@section('dashboard', 'active')
@section('content')

    <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-danger">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Siswa Bermasalah</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_siswa_bermasalah }}
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6 col-12">
            <div class="card card-statistic-1">
                <div class="card-icon bg-primary">
                    <i class="far fa-user"></i>
                </div>
                <div class="card-wrap">
                    <div class="card-header">
                        <h4>Total Siswa</h4>
                    </div>
                    <div class="card-body">
                        {{ $total_siswa }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-md mb-3">
        <div class="badge text-bg-success">Aman</div> &rarr;
        <div class="badge text-bg-warning text-white">Kurang Aman</div> &rarr;
        <div class="badge text-bg-secondary">Tidak Aman</div> &rarr;
        <div class="badge text-bg-danger">Bahaya</div>
    </div>
    <div class="card p-3">
        <div class="mb-3 ">
            <form action="{{ route('user.import') }}" class="d-flex" method="post" enctype="multipart/form-data">
                @csrf
                <input type="file" class="form-control outlined-none col-4" name="file">
                <button type="submit" class="btn btn-success ms-2">Import Data Siswa</button>
            </form>
        </div>

        <div class="text-dark h4 mb-4">
            Siswa Dengan Poin Rendah
        </div>
        <table class="table">
            <thead class="text-center">
                <tr>
                    <th rowspan="2" scope="col">No</th>
                    <th rowspan="2" scope="col">Nama Siswa</th>
                    <th rowspan="2" scope="col">Kelas</th>
                    <th rowspan="2" scope="col">Nis</th>
                    <th rowspan="2" scope="col">Poin</th>
                    <th rowspan="2" scope="col">Status</th>
                    <th scope="col">Detail</th>
                </tr>
            </thead>
            @foreach ($siswa as $s)
                <tbody class="text-center">
                    <tr class="bg-white">
                        <td rowspan="2" scope="col">{{ $loop->iteration }}</td>
                        <td rowspan="2" scope="col">{{ $s->nama }}</td>
                        <td rowspan="2" scope="col">{{ $s->kelas->nomor_kelas }}</td>
                        <td rowspan="2" scope="col">{{ $s->nis }}</td>
                        <td rowspan="2" scope="col">{{ $s->poin }}</td>
                        @if ($s->poin <= 150 && $s->poin > 120)
                            <td>
                                <div class="badge text-bg-success">Aman</div>
                            </td>
                        @elseif ($s->poin <= 120 && $s->poin > 80)
                            <td>
                                <div class="badge text-bg-warning text-white">Kurang Aman</div>
                            </td>
                        @elseif ($s->poin <= 80 && $s->poin > 50)
                            <td>
                                <div class="badge text-bg-secondary">Tidak Aman</div>
                            </td>
                        @elseif ($s->poin <= 50)
                            <td>
                                <div class="badge text-bg-danger">Bahaya</div>
                            </td>
                        @endif
                        <td scope="col">
                            <a href="/pelanggaran/detail/{{ $s->id }}" class="text-decoration-none">
                                <i class="bi bi-arrow-right-circle-fill text-info fa-2x cursor-pointer "></i>
                            </a>
                        </td>
                    </tr>
                </tbody>
            @endforeach
        </table>
        {{ $siswa->links() }}
    </div>
@endsection
