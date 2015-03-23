
<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
    {!! Form::label('title', 'Title:') !!}
    {!! $errors->first('title',  '<span class="help-block">:message</span>') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('body', 'Text:') !!}
    {!! $errors->first('body',  '<span class="help-block">:message</span>') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
    {!! Form::label('tag_list', 'Tags:') !!}
    {!! $errors->first('tag_list',  '<span class="help-block">:message</span>') !!}
    {!! Form::select('tag_list[]', $tags, null, ['class' => 'form-control', 'multiple']) !!}
</div>

<div class="form-group">
    {!! Form::submit($buttonSubmitText, ['class' => 'btn btn-success']) !!}
</div>