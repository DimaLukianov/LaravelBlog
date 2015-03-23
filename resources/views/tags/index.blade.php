@extends('layout')

@section('content')

    <p>{!! link_to_route('tags.create', 'New tag', null, ['class' => 'btn btn-primary']) !!}</p>

    @foreach($tags as $tag)

        <h3>{!! link_to_route('tags.show', $tag->name, [$tag->id]) !!}</h3>

    @endforeach

@endsection