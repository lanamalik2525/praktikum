@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="card mt-4 m-auto" style="width: 50%;">
                <div class="card-body">

                    <div class="text-center">
                        <h3>Selamat Datang di aplikasi praktikum web 2</h3>
                        <p>Silahkan Login dengan username dan password anda</p>
                    </div>

                    <div class="form mt-4">

                        @session('success')
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endsession

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul class="mb-0">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('auth.loginStore') }}" method="POST">
                            @csrf

                            <div class="form-group mt-3">
                                <label for="username">Username</label>
                                <input type="text" name="username" class="form-control"
                                    placeholder="Silahkan masukan username anda">

                                @error('username')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control"
                                    placeholder="Silahkan masukan password anda">

                                @error('password')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group float-end mt-3">
                                <a href="{{ route('auth.registerView') }}" class="btn btn-success">
                                    Register
                                </a>

                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection