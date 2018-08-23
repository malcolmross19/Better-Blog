@extends('layout.base')
@section('title')
    {{ Auth::user()->name }}'s Profile | Better Blog
@endsection
@section('content')
    <section class="container">
        @if(Session::has('info-updated'))
            <div class="alert alert-success alert-dismissible fade show text-center" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4><strong>Success!</strong></h4>
                <span>{{ session('info-updated') }}</span>
            </div>
        @endif
        <h1>{{ $user->name }}</h1>
        <p>Email: {{ $user->email }}</p>

        @if(Auth::user()->id == $user->id)
            <a href="{{ route('edit-info', Auth::user()->id) }}">Edit Account</a>
        @endif
        <a href="{{ route('user-blogs', $user->id) }}">Show Blogs</a>
    </section>
@endsection