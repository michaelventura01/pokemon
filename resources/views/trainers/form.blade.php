<div class="form-group">
    {!! Form::label('name', 'NOMBRE') !!}
    {!! Form::text('name', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('description', 'DESCRIPCION') !!}
    {!! Form::text('description', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'SLUG') !!}
    {!! Form::text('slug', null, ['class' => 'form-control'])!!}
</div>
<div class="form-group">
    {!! Form::label('avatar', 'AVATAR') !!}
    {!! Form::file('avatar', null, ['class' => 'form-control'])!!}
</div>