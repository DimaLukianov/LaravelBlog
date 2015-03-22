
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body', 'New comment:') !!}
    {!! $errors->first('body',  '<span class="help-block">:message</span>') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
    {!! Form::hidden('post_id', $post->id) !!}

<div class="form-group">
    {!! Form::submit($buttonSubmitText, ['class' => 'btn btn-success']) !!}
</div>