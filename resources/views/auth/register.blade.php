@extends('layouts.auth')
@section('titlepage')
    Register
@endsection
@section('content')
    <div class="container">
        <div class="row mx-1 justify-content-center mt-5">
            <div class="col-sm-4 shadow rounded-3 bg-white my-5 p-4">
                <div class="text-center pt-5 pb-5">
                    <p class="fs-4">TASIS</p>
                </div>
                <form action="{{ url('/regisPost') }}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label class="form-label">
                            Username
                            <i class="text-danger">*</i>
                        </label>
                        <input type="name" name="name" class="form-control shadow-none" placeholder="Username">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Password
                            <i class="text-danger">*</i>
                        </label>
                        <input type="password" id="password" name="password" class="form-control shadow-none"
                            placeholder="********">
                    </div>
                    <button type="submit" name="register" class="py-2 my-2 btn btn-primary w-100 text-white">
                        Register
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
