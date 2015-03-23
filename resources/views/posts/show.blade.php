@extends('layout')

@section('content')

    <b>Title:</b>

    <p>{{ $post->title }}</p>

    <b>Text:</b>

    <p>{!! nl2br($post->body) !!}</p>

    @unless($post->tags->isEmpty())

        <b>Tags:</b>

        <ul class="list-unstyled">

            @foreach($post->tags as $tag)

                <li>{!! link_to_route('tags.show', $tag->name, [$tag->id]) !!}</li>

            @endforeach

        </ul>

    @endunless

    <p><i>Author: {{ $post->user->name }}</i></p>


    @if(\Illuminate\Support\Facades\Auth::check() and $post->user_id==\Illuminate\Support\Facades\Auth::user()->id)

        {!! link_to_route('posts.edit', 'Edit', [$post->id], ['class' => 'btn btn-primary']) !!}

        <p>{!! delete_form(['posts.destroy', $post->id]) !!}</p>

    @endif
    <hr>

    <h3>Comments:</h3>

    <ul class="list-unstyled">

        @foreach($post->comments()->get() as $comment)

            <li>

                <p class="text-info">{{ $comment->user()->first()->name }}:</p>

                <p>{{ $comment->body }}</p>

                <p class="text-muted">{{ $comment->created_at->diffForHumans() }}</p>

                @if(\Illuminate\Support\Facades\Auth::check() and $comment->user_id==\Illuminate\Support\Facades\Auth::user()->id)

                    {!! delete_comments_form(['comments.destroy', $comment->id], $post->id) !!}

                @endif

                <hr>

            </li>

        @endforeach

    </ul>

    @if(\Illuminate\Support\Facades\Auth::check())

        @include('comments.create')

    @endif

@endsection