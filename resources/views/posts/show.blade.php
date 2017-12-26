@extends('index')

@section('content')
    <a href="{{ route('posts.add') }}">add posts</a>

    <h3>all posts :</h3>
    <hr>
    <div id="app">
        @foreach ($posts as $post)
            <p>{{ $post->title }}</p>
            <p>
                <button id="show-modal" @click="showModal = true, id = {{ $post->id }}">Delete</button>
            </p>
        @endforeach

        <modal v-if="showModal" @close="showModal = false">
            <p slot="body">Êtes-vous sûr de vouloir supprimer ce post ?</p>
            <a slot="footer" :href="'/posts/delete/' + id">supprimer ce post</a>
        </modal>
    </div>
@endsection