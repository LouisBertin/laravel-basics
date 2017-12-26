@extends('index')

@section('content')
    <a href="{{ route('posts.add') }}">add posts</a>

    <h3>all posts :</h3>
    <hr>
    @foreach ($posts as $post)
        <p>{{ $post->title }}</p>
    @endforeach
@endsection