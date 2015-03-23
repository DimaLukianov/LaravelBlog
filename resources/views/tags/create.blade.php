@extends('layout')

@section('content')

    <h3>New tag</h3>

    {!! Form::open(['route' => 'tags.store']) !!}

    @include('tags._form', ['buttonSubmitText' => 'Create tag'])

    {!! Form::close() !!}

@endsection