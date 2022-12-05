@extends('layouts.auth')
@section('titlepage')
    Error 404 (Not Found)
@endsection
@section('content')
    <div class="mx-auto d-flex justify-content-center align-items-center flex-column">
        <img class="w-25 mt-5" src="assets/img/404.png" alt="404">
        <div class="mt-3 text-capitalize">
            <p class="fs-3 fw-semibold " style="letter-spacing: 1px; color:rgba(156, 13, 13, 0.788);">Oops. You do not have
                access to
                this page</p>
            <p class="text-center" style="font-size: 16px; color:rgb(148, 147, 147);">&copy; therrors.com</p>
        </div>
        <a href="{{ route('login') }}" class="fs-3" style="color:rgb(148, 147, 147);"><i
                class="bi bi-arrow-return-left"></i></a>
    </div>
@endsection
