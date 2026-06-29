@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container">
        <div class="card mt-4 m-auto" style="width: 50%;">
            <div class="card-body">

                <h3 class="text-center">Halaman Register</h3>

                <div class="form mt-4">
                    <form action="{{ route('auth.registerStore') }}" method="POST">
                        @csrf

                        <div class="form-group mt-3">
                            <label>Nama</label>
                            <input type="text" name="nama" class="form-control @error('nama') is-invalid @enderror"
                                placeholder="Silahkan masukan nama anda">

                            @error('nama')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label>Username</label>
                            <input type="text" name="username" class="form-control @error('username') is-invalid @enderror"
                                placeholder="Silahkan masukan username anda">

                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group mt-3">
                            <label>Password</label>
                            <input type="password" name="password"
                                class="form-control @error('password') is-invalid @enderror"
                                placeholder="Silahkan masukan password anda, minimal 8 karakter">

                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <div class="form-group float-end mt-3">
                            <a href="{{ route('auth.loginView') }}" class="btn btn-success">
                                Back to Login
                            </a>

                            <button type="submit" class="btn btn-primary">
                                Register
                            </button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection