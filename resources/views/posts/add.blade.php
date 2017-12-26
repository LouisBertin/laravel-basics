@extends('index')

@section('content')
    <div class="col-md-6">
        <label for="">Title :</label>
        <p contenteditable="true" class="title">
            title
        </p>
        <label for="">Body :</label>
        <p contenteditable="true" class="body">
            body
        </p>
        <button class="add-post">add post</button>
    </div>

    <div class="col-md-6">
        {!! Form::open(['route' => 'post.add.classic']) !!}
            {!! Form::token() !!}

            {!! Form::label('title', 'Title') !!}
            {!! Form::text('title'); !!} <br>
            {!! Form::label('body', 'Body') !!}
            {!! Form::textarea('body'); !!} <br><br>

            {!! Form::submit('Add post!') !!}
        {!! Form::close() !!}
    </div>
@endsection