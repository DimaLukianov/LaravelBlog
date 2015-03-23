@extends('layout')

@section('content')

    <h3>Edit: {{ $tag->name }}</h3>


    {!! Form::model($tag, ['route' => ['tags.update', $tag->id], 'method' => 'PATCH']) !!}

    @include('tags._form', ['buttonSubmitText' => 'Edit tag'])

    {!! Form::close() !!}

    {!! link_to_route('tags.show', 'Close', [$tag->id], ['class' => 'btn btn-default']) !!}


@endsection