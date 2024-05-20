@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Detail Post
        </div>
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <div class="mb-2">
                <span class="badge bg-secondary">#{{ $post->hashtag }}</span>
            </div>
            <div>
                <span class="ms-2">Likes: {{ $post->likes }}</span>
            </div>
            <div class="comments mt-4">
                <h5>Comments:</h5>
                @foreach ($post->comments as $comment)
                    <div class="comment">
                        <ol>
                            <li>
                                <p>{{ $comment->konten }}</p>
                            </li>
                        </ol>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="card-footer">
            <a href="/" class="btn btn-outline-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
