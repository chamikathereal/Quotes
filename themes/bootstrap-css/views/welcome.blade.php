@extends('layouts.frontend')

@section('content')
    {{-- BLOG --}}

    <div class="jumbotron p-3 p-md-5 text-white rounded bg-dark">
        <div class="col-md-6 px-0">
            <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
            <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently
                about what's most interesting in this post's contents.</p>
            <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
        </div>
    </div>

    <div class="row mt-2 mb-2">
        @foreach ($posts as $post)
            <div class="col-md-3">
                <div class="card mb-3" style="width: 18rem;"> {{-- style="width: 18rem;" --}}
                    <img src="{{asset('thumbnails/'.$post->thumbnail)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <small class="text-muted">{{ $post->user->name }} - {{ date('Y-m-d', strtotime($post->created_at)) }}</small>
                        <p class="card-text">{{ $post->description }}</p>
                        <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Continue reading</a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@endsection
