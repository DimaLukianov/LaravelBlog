@extends('layout')

@section('content')

    <h2>Editing</h2>


    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}

        @include('posts._form')

        <div class="form-group">
            {!! Form::submit('Update post', ['class' => 'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}
    {!! link_to_route('posts.show', 'Close', [$post->id], ['class' => 'btn btn-default']) !!}


@endsection