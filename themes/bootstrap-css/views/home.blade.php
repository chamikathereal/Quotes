// layouts
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('New Post') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="post" action="{{ route('post.store') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Post Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Enter Post Title"
                                    required>
                            </div>
                            <div class="form-group mt-3">
                                <label>Post Description</label>
                                <textarea name="description" class="form-control" rows="5" required></textarea>
                            </div>

                            <div class="form-group mt-3">
                                <input type="file" class="form-control-file" name="thumbnail" id="exampleFormControlFile1">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
