@extends('layout')

@section('content')

    <b>Title:</b>
    <p>{{ $post->title }}</p>
    <b>Text:</b>
    <p>{!! nl2br($post->body) !!}</p>

    {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary']) !!}

    <p>{!! delete_form(['posts.destroy', $post->id]) !!}</p>

@endsection