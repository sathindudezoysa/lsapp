@extends('layout.app')

@section('content')
{!! Form::open(['action' => 'App\Http\Controllers\PostController@store', 'method' => 'POST']) !!}
    <div class ="text-area">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class' =>'form-control','placeholder' => 'Ender youor body'])}}
    </div>
    <br>
    <div class ="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body','',['class' =>'form-control','placeholder' => 'Ender your body'])}}
    </div> 
    <br>
    {{Form::submit('Submit',['class'=>'button'])}}
{!! Form::close() !!}
@endsection
