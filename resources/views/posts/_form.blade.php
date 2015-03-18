{!! Form::label('title', 'Title:') !!}
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! $errors->first('title',  '<span class="help-block">:message</span>') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>
{!! Form::label('body', 'Text:') !!}
<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! $errors->first('body',  '<span class="help-block">:message</span>') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>
