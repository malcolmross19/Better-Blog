@extends('layout.base')
@section('title', "Blogs | Better Blog")
@section('content')
    <section class="container">
        <section class="alert alert-secondary text-center col-md-8 mx-auto mb-5">
            <h2>Blogs</h2>
            <p class="h5 mb-5 mt-3">Read about what others are doing to paint their life canvases!</p>
            <div class="row mx-auto justify-content-center justify-content-sm-around">
                <a href="{{ route('create-blog') }}" class="btn btn-info mb-3 mb-sm-0 col-8 col-sm-auto">Create Your Own Blog!</a>
                <a href="#" class="btn btn-primary mb-3 mb-sm-0 col-8 col-sm-auto">Engage In Popular Blogs!</a>
            </div>
        </section>

        {{-- Check if the blogs variable is empty and contains data --}}
        @if(isset($blogs) && count($blogs) > 0)

            {{-- If the blogs variable isn't empty then display the data --}}
            @foreach($blogs as $blog)
                <article class="bg-dark p-3 rounded mb-4">
                    <div class="row font-weight-bold">
                        <p class="col-3">{{ $blog->author }}</p>
                        <p class="col-3">{{ $blog->date }}</p>
                        <p class="col-3"><i class="far fa-thumbs-up"></i> {{ $blog->likes }}</p>
                        <p class="col-3"><i class="far fa-comment"></i> {{ $blog->comments }}</p>
                    </div>
                    <div class="row">
                        <img class="h-25 w-25 rounded col-3" src="{{ $blog->image }}" alt="{{ $blog->title }} Image">
                        <p class="col-9">{{ $blog->body }}</p>
                        <a href="{{ route('show-blog', $blog->id) }}" class="mx-auto text-info font-weight-bold">Read More</a>
                    </div>
                </article>
                <hr>
            @endforeach
        @else

            {{-- If the blog is empty let users know --}}
            <div class="alert alert-danger text-center col-md-8 mx-auto" role="alert">
                <h3><strong>Oh No!</strong></h3>
                <p class="h5 mb-4">It seems there are no blogs to display currently!</p>
                <a href="{{ route('create-blog') }}" class="btn btn-success">Write The First Blog!</a>
            </div>
        @endif
    </section>
@endsection