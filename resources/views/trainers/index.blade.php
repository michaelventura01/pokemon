@extends('layouts.app')
@section('title', 'Trainers')
@section('content')
    <p>Listado de Trainers</p>
    <div class="row">
        @foreach($trainers as $trainer)
            <div class="card text-center" style="width:15rem; padding:20px; margin:20px; ">
                <img style = "height:100px; width:100px; background-color: lightgray; margin:20px;" class="card-img-top rounded-circle mx-auto d-block" src="images/{{$trainer->avatar}}">
                <div class="card-body">
                    <h5 class="card-title">{{$trainer->name}}</h5>
                    <p>{{$trainer->description}}</p>                    
                    <a class="btn btn-primary" href="/trainers/{{$trainer->slug}}">Mas Informacion</a>
                </div>
            </div>
        @endforeach 
    </div>   
@endsection