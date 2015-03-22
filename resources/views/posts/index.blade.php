@extends('layout')

@section('content')

    <p>{!! link_to_route('posts.create', 'New post', null, ['class' => 'btn btn-primary']) !!}</p>

    @foreach($posts as $post)

        <h3>{!! link_to_route('posts.show', $post->title, [$post->id]) !!}</h3>

    @endforeach

@endsection