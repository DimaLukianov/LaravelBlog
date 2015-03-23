
<div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
    {!! Form::label('name', 'Name:') !!}
    {!! $errors->first('name',  '<span class="help-block">:message</span>') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($buttonSubmitText, ['class' => 'btn btn-success']) !!}
</div>