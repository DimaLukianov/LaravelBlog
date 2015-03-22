@extends('layout')

@section('content')

    <h3>New post</h3>

    {!! Form::open(['route' => 'posts.store']) !!}

        @include('posts._form', ['buttonSubmitText' => 'Create post'])

    {!! Form::close() !!}

@endsection