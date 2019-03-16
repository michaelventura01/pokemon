@extends('layouts.app')

@section('title','Trainers Edit')

@section('content')

    {!! Form::model($trainer, ['route' => ['trainers.update', $trainer], 'method' => 'PUT', 'files' => true]) !!}
        @include('trainers.form')
        {!! Form::submit('ACTUALIZAR', ['class' => 'btn btn-primary'])!!}
    {!! Form::close() !!}
    <!--form class = "form-group" method = "POST" action = "/trainers/{{$trainer->slug}}" enctype="multipart/form-data">
        !--proteccion de formularios--
        @method('PUT')
        @csrf
        <div class="form-group">
            <label for="">NOMBRE</label>
            <input type="text" name = "name" class="form-control" value="{{$trainer->name}}"/>
            <br>
            <label for="">DESCRIPCION</label>
            <input type="text" name = "description" class="form-control" value="{{$trainer->description}}"/>
            <br>
            <label for="">SLUG</label>
            <input type="text" name = "slug" class="form-control" value="{{$trainer->slug}}"/>
            <br>
            <label for="">Avatar</label>
            <input type="file" name = "avatar" />
            <img style = "height:200px; width:200px; background-color: lightgray; margin:20px;" 
            class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">
        </div>
        <button class="btn btn-primary" type="submit">Actualizar</button>
    </form-->
@endsection

