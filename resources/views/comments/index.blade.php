
@foreach($comments as $comment)

    <p>{!! link_to_route('comments.show', $comment->body, [$comment->id]) !!}</p>

@endforeach