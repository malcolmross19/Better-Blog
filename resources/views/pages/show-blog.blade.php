@extends('layout.base')
@section('title', "Blogs | Better Blog")
@section('content')
    <section class="container">
        <h1>{{ $blog->title }}</h1>

        <section>
          <article class="bg-dark p-3 rounded mb-4">
            <div class="row font-weight-bold">
              <p class="col-3">{{ $blog->author }}</p>
              <p class="col-3">{{ $blog->created_at }}</p>
              <p class="col-3"><i class="far fa-thumbs-up"></i> {{ $blog->likes }}</p>
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
        </section>
    </section>
@endsection
