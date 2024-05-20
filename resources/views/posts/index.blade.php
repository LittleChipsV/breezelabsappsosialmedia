@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row">
        @foreach ($posts as $post)
        <div class="col-md-4 mb-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->content, 100) }}</p>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Read More</a>
                </div>
                <div class="card-footer text-muted">
                    <span class="badge bg-secondary">#{{ $post->hashtag }}</span>
                    <span class="float-end">Likes: {{ $post->likes }}</span>
                    <div>Diposting oleh: {{ $post->user->name }}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div
</div>
@endsection
