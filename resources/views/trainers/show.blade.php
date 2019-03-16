@extends('layouts.app')
@section('title','Trainer')
@section('content')
    @include('common.messages')
    <img style = "height:200px; width:200px; background-color: lightgray; margin:20px;" 
    class="card-img-top rounded-circle mx-auto d-block" src="/images/{{$trainer->avatar}}">
    <div class="text-center">
        <h3 class="card-title">{{$trainer->name}}</h3>
        <p>{{$trainer->description}}</p>
        <a class = "btn btn-primary" href="/trainers/{{$trainer->slug}}/edit">EDITAR</a>
        
        {!! Form::open(['route'=>['trainers.destroy', $trainer->slug], 'method' => 'DELETE'])!!}
            {!! Form::submit('ELIMINAR', ['class' => 'btn btn-danger']) !!}
        {!! Form::close()!!}
    </div>

@endsection