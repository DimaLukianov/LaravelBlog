@extends('layout')

@section('content')

    <b>Name:</b>

    <p>{{ $tag->name }}</p>

    @unless($tag->posts->isEmpty())

        <b>Posts:</b>

        <ul class="list-unstyled">

            @foreach($tag->posts as $post)

                <li>{!! link_to_route('posts.show', $post->title, [$post->id]) !!}</li>

            @endforeach

        </ul>

    @endunless

    @if(\Illuminate\Support\Facades\Auth::check())

        {!! link_to_route('tags.edit', 'Edit', [$tag->id], ['class' => 'btn btn-primary']) !!}

        <p>{!! delete_form(['tags.destroy', $tag->id]) !!}</p>

    @endif

@endsection