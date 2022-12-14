@extends('layouts.main')
@section('titlepage')
    Absensi
@endsection
@section('title')
    Data Absensi
@endsection
@section('content')
    @php
        function getKeterangan($data_absen, $siswa_id, $month, $ket)
        {
            $filteredKet = array_filter($data_absen, function ($var) use ($siswa_id, $ket, $month) {
                return $var['siswa']['id'] == $siswa_id && date('F', strtotime($var['tanggal'])) === $month && $var['keterangan'] === $ket;
            });
        
            return count($filteredKet);
        }
        
    @endphp
    @foreach ($bulan as $b)
        <div class="mb-4">
            <h3 class="ms-2 mb-3 mt-5">{{ $b }}</h3>
            <hr>
        </div>
        @foreach ($data as $k)
            <div class="accordion shadow-sm rounded-lg" id="accordionPanelsStayOpenExample">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="{{ "s$k->id$b" }}-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                            data-bs-target="#{{ "s$k->id$b" }}-collapseTwo" aria-expanded="false"
                            aria-controls="{{ "s$k->id$b" }}-collapseTwo">
                            {{ "$k->nomor_kelas  $k->nama_jurusan" }}
                        </button>
                    </h2>
                    <div id="{{ "s$k->id$b" }}-collapseTwo" class="accordion-collapse collapse"
                        aria-labelledby="{{ "s$k->id$b" }}-headingTwo">
                        <div class="accordion-body">
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
                                    @foreach ($k->siswa as $siswa)
                                        <tr>
                                            <th scope="row">{{ $loop->iteration }}</th>
                                            <td>{{ $siswa->nama }}</td>
                                            <td>{{ $siswa->nis }}</td>
                                            <td>{{ getKeterangan($absen->toArray(), $siswa->id, $b, 'izin') }} </td>
                                            <td>{{ getKeterangan($absen->toArray(), $siswa->id, $b, 'sakit') }} </td>
                                            <td>{{ getKeterangan($absen->toArray(), $siswa->id, $b, 'alpha') }} </td>
                                            <td>
                                                {{ getKeterangan($absen->toArray(), $siswa->id, $b, 'izin') +
                                                    getKeterangan($absen->toArray(), $siswa->id, $b, 'sakit') +
                                                    getKeterangan($absen->toArray(), $siswa->id, $b, 'alpha') }}
                                            </td>
                                            <td>
                                                <a href="/absen/detail/{{ $siswa->id }}" class="text-decoration-none">
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
    @endforeach
@endsection
