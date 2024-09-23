@extends('layouts.frontend')
@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-8">
                <div class="card text-center mt-5 mb-5">
                    {{-- <div class="card-header">
                        #{{ $post->id }}
                    </div> --}}
                    <div class="card mb-3 mx-auto mt-3" style="width: 18rem;">
                        <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" class="card-img-top" alt="...">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title mb-md-4">{{ $post->title }}</h5>
                        <div class="card-body border border-2 mb-md-4">
                            <p class="card-text"> " {{ $post->description }} "</p>
                            <small class="fw-bold text-muted">-{{ $post->user->name }}-</small>
                        </div>
                    </div>
                    <div class="card-footer text-muted">
                         {{ date('Y-m-d', strtotime($post->created_at)) }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
