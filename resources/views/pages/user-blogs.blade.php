@extends('layout.base')
@section('title')
    {{ session('author-name') }}'s Blogs | Better Blog
@endsection
@section('content')
    <section class="container">
        <h1>{{ session('author-name') }}'s Blogs</h1>

        @if(isset($blogs) && count($blogs) > 0)

            @foreach($blogs as $blog)
                <article class="bg-dark p-3 rounded mb-4">
                    <div class="row font-weight-bold">
                        <p class="col-3">{{ $blog->author_name }}</p>
                        <p class="col-3">{{ $blog->created_at }}</p>
                        <p class="col-3">
                            <a href="{{ action('BlogsController@saveLike', $blog->id) }}">
                                <i class="far fa-thumbs-up"></i> {{ $blog->likes }}
                            </a>
                        </p>
                        <p class="col-3"><i class="far fa-comment"></i> {{ $blog->comments }}</p>
                    </div>
                    <div class="row">
                        <img class="h-25 w-25 rounded col-3" src="{{ $blog->image }}" alt="{{ $blog->title }} Image">
                    </div>
                    <div class="row">
                        <p class="col-9">{{ $blog->body }}</p>
                    </div>
                    <a href="{{ action('BlogsController@edit', $blog->id) }}">Edit</a>  |
                    <a href="{{ action('BlogsController@destroy', $blog->id) }}">Delete</a>
                </article>
            @endforeach
        @else
            {{-- If the user has no blogs let the viewer know --}}
            <div class="alert alert-danger text-center col-md-8 mx-auto" role="alert">
                <h3><strong>Oh No!</strong></h3>
                <p class="h5 mb-4">It seems this user hasn't posed any blogs yet!</p>
            </div>
        @endif
    </section>
@endsection