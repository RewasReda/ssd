@extends('layouts.app')


@section('content')
    <h1>Edit Game</h1>
    {!! Form::open(['action' => ['GamesController@update',$game->id],'method'=>'POST', 'enctype' => 'multipart/form-data']) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$game->title,['class'=>'form-control','placeholder'=> 'Title'])}}
    </div>
    <div class="form-group">
        {{Form::label('category', 'Category')}}
        {{Form::select('category', ['Action' => 'Action', 'Horror' => 'Horror','FPS' => 'FPS', 'Third_Person' => 'Third_Person'], 'Action')}}
    </div>
    <div class="form-group">
        {{Form::label('body','Body')}}
        {{Form::textarea('body',$game->body,['id'=>'article-ckeditor','class'=>'form-control','placeholder'=> 'Body Text'])}}

    </div>
    <div class="form-group">
        {{Form::file('cover_image')}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{{Form::submit('submit',['class'=>'btn btn-primary'])}}}
    {!! Form::close() !!}
@endsection
