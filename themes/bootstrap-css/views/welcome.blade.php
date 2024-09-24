@extends('layouts.frontend')

@section('content')
    {{-- BLOG --}}

    <div class="jumbotron p-3 p-md-5 mb-4 mb-md-0 text-white rounded bg-dark d-flex justify-content-center">
        @if ($posts->isNotEmpty())
            <?php $firstPost = $posts->first(); ?>
            <div class="col-10 col-md-12">
                <div class="row text-center text-md-start">
                    <div class="col-md-4 px-0 d-flex justify-content-center d-md-none d-block text-center">
                        <img src="{{ asset('thumbnails/' . $firstPost->thumbnail) }}" style="width: 200px" class="card-img-top"
                            alt="...">
                    </div>
                    <div class="col-md-8 px-0 mt-3 mt-md-0">
                        <h1 class="display-4 font-italic">{{ $firstPost->title }}</h1>
                        <p class="lead my-3">{{ Str::limit($firstPost->description, 150) }}</p>
                        <p class="lead mb-0">
                            <a href="{{ route('posts.show', $firstPost->id) }}" class="btn btn-primary">Continue reading</a>
                        </p>
                    </div>
                    <div class="col-md-4 mb-3 mb-md-0 px-0 d-flex justify-content-center d-none d-md-block text-center">
                        <img src="{{ asset('thumbnails/' . $firstPost->thumbnail) }}" style="width: 200px" class="card-img-top"
                            alt="...">
                    </div>
                </div>
            </div>
        @endif
    </div>

    <div class="row mt-2 mb-2">
        @foreach ($posts as $post)
            <div class="col-md-12">
                <div class="card mb-3">

                    <div class="card-body">
                        <div class="row d-flex justify-content-center align-items-center">
                            <!-- Thumbnail Image -->
                            <div class="col-12 col-md-3 d-flex justify-content-center">
                                <img src="{{ asset('thumbnails/' . $post->thumbnail) }}" class="img-fluid"
                                    style="width: 200px" alt="Thumbnail">
                            </div>

                            <!-- Post Title, Date, and Description -->
                            <div class="col-12 col-md-7 d-flex flex-column align-items-md-start align-items-center"> <!-- Changed this line -->
                                <h5 class=" fw-bold"
                                    style="max-width: 15rem; overflow: hidden; text-overflow: ellipsis; font-style: roboto">
                                    {{ $post->title }}
                                </h5>
                                <small class="text-muted">{{ $post->user->name }} -
                                    {{ date('Y-m-d', strtotime($post->created_at)) }}</small>
                                <div class="col-10 col-md-12 d-flex text-center text-md-start">
                                    <p class="card-text mt-2"
                                    style="overflow: hidden; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; text-overflow: ellipsis;">
                                    {{ $post->description }}
                                </p>
                                </div>
                            </div>

                            <!-- Continue Reading Button -->
                            <div class="col-12 col-md-2 d-flex mt-4 mt-md-0 justify-content-center">
                                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">Continue reading</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        @endforeach

    </div>

    <div class="col-12 d-flex justify-content-center">
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center">
              <li class="page-item {{ $posts->onFirstPage() ? 'disabled' : '' }}">
                <a class="page-link" href="{{ $posts->previousPageUrl() }}" tabindex="-1">Previous</a>
              </li>
              @for ($i = 1; $i <= $posts->lastPage(); $i++)
                <li class="page-item {{ $posts->currentPage() == $i ? 'active' : '' }}">
                  <a class="page-link" href="{{ $posts->url($i) }}">{{ $i }}</a>
                </li>
              @endfor
              <li class="page-item {{ $posts->hasMorePages() ? '' : 'disabled' }}">
                <a class="page-link" href="{{ $posts->nextPageUrl() }}">Next</a>
              </li>
            </ul>
          </nav>
    </div>
@endsection
