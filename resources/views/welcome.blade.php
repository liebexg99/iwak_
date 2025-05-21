@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
<div class="row justify-content-center text-center">
    <div class="col-md-8">
        <h1 class="display-4 mb-4">Welcome to Iwak Website</h1>
        <p class="lead">Explore Iwak Anda dan Pesan!</p>
        
        @auth
            <a href="{{ route('ikan.index') }}" class="btn btn-primary btn-lg mt-3">Cari Iwak Anda</a>
        @else
            <p class="mt-4">Join us to manage and explore fish data.</p>
            <div class="mt-3">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg me-2">Login</a>
                <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
            </div>
        @endauth
    </div>
</div>
@endsection