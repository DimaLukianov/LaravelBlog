@extends('layout')

@section('content')

    <h3>Edit: {{ $post->title }}</h3>


    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PATCH']) !!}

        @include('posts._form', ['buttonSubmitText' => 'Edit post'])

    {!! Form::close() !!}

    {!! link_to_route('posts.show', 'Close', [$post->id], ['class' => 'btn btn-default']) !!}


@endsection