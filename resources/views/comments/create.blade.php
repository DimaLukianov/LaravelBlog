
    {!! Form::open(['route' => 'comments.store']) !!}

        @include('comments._form', ['buttonSubmitText' => 'Create comment'])

    {!! Form::close() !!}