@extends('layout')

@section('content')

    <h2>New post</h2>


    {!! Form::open(['route' => 'posts.store']) !!}

        @include('posts._form')

        <div class="form-group">
            {!! Form::submit('Create post', ['class' => 'btn btn-success']) !!}
        </div>

    {!! Form::close() !!}

@endsection