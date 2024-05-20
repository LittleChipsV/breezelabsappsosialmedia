@extends('layouts.app')

@section('content')
<div class="container"  style="max-width: 400px">
    <div class="card">
        <h2 class="card-header text-center">Profil</h2>
        <div class="card-body">
            <p class="card-text">Username: {{ $user->name }}</p>
            <p class="card-text">Email: {{ $user->email }}</p>
            <a href="{{ route('posts.index') }}" class="btn btn-primary">Kembali</a>
        </div>
    </div>
</div>
@endsection
