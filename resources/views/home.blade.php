@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <div class="container mt-4">

        <div class="card">

            <div class="card-body bg-light">

                <h3 class="text-primary">
                    Halo, Selamat datang User {{ Auth::user()->nama }}
                </h3>

                <p>Ini adalah halaman Home</p>

            </div>

        </div>

    </div>
@endsection