@extends('layouts.app')

@section('title','Trainers Create')

@section('content')
    @include('common.errors');
       
    {!! Form::open(['route' => 'trainers.store', 'method'=>'POST', 'files' => true]) !!}
        @include('trainers.form')
        {!! Form::submit('GUARDAR', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}
    <!--
    <form class = "form-group" method = "POST" action = "/trainers" enctype="multipart/form-data">
        proteccion de formularios
        @csrf
        <div class="form-group">
            <label for="">NOMBRE</label>
            <input type="text" name = "name" class="form-control"/>
            <br>
            <label for="">DESCRIPCION</label>
            <input type="text" name = "description" class="form-control" />
            <br>
            <label for="">Avatar</label>
            <input type="file" name = "avatar" />
        </div>
        <button class="btn btn-primary" type="submit">Guardar</button>
    </form>
    -->
@endsection

