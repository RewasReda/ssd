@extends('layouts.app')

@section('content')


<div 
class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto my-5" >
      <h1 class="display-4 font-weight-normal">SMOKEN SEXY DUCK </h1>
      <h5 class="display-4 font-italic">Build your own world of Games</h5>
      {{ Form::open() }}
      @if(user()->type == 'user' )

      {!! Form::open(['action' => 'PagesController@devv', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}

      {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
  {!! Form::close() !!}
     {{ Form::close() }}
    </div>
    <div class="product-device box-shadow d-none d-md-block"></div>
    <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>

  </div>


@endsection 