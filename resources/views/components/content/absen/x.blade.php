@extends('layouts.main')
@section('titlepage')
    Absensi | X
@endsection
@section('title')
    Data Absensi
@endsection
@section('content')
    <div class="accordion shadow-sm rounded-lg" id="accordionPanelsStayOpenExample">
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                    aria-controls="panelsStayOpen-collapseOne">
                    Pemasaran
                </button>
            </h2>
            <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                    <p class="ms-3" style="color: rgb(143, 142, 142);">Pemasaran | Absen</p>
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
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->nis }}</td>
                                    <td>{{ $s->izin }}</td>
                                    <td>{{ $s->sakit }}</td>
                                    <td>{{ $s->alpha }}</td>
                                    <td>{{ $s->izin + $s->sakit + $s->alpha }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
<<<<<<< HEAD
        <div class="card-body">
            <table class="table" style="margin-top: -20px;" border="1">
                <thead class="text-center">
                    <tr>
                        <th rowspan="2" scope="col">No</th>
                        <th rowspan="2" scope="col">Nama Siswa</th>
                        <th rowspan="2" scope="col">Jurusan</th>
                        <th>Izin</th>
                        <th>Sakit</th>
                        <th>Alpha</th>
                        <th rowspan="2" scope="col">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($absen as $abs)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $abs->siswa_id }}</td>
                            <td></td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
=======
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseTwo">
                    Accordion Item #2
                </button>
            </h2>
            <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingTwo">
                <div class="accordion-body">
                    <strong>This is the second item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                    aria-controls="panelsStayOpen-collapseThree">
                    Accordion Item #3
                </button>
            </h2>
            <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse"
                aria-labelledby="panelsStayOpen-headingThree">
                <div class="accordion-body">
                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until the
                    collapse plugin adds the appropriate classes that we use to style each element. These classes
                    control the overall appearance, as well as the showing and hiding via CSS transitions. You can
                    modify any of this with custom CSS or overriding our default variables. It's also worth noting
                    that just about any HTML can go within the <code>.accordion-body</code>, though the transition
                    does limit overflow.
                </div>
            </div>
>>>>>>> 1bdea26 (temporary)
        </div>
    </div>
@endsection
