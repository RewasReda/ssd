@extends('layouts.app')


@section('content')
    <h1>{{$game->title}}</h1>
    <h5>{{$game->category}}</h5>
{{--    <img style="width:50% ;height 10%" src="/storage/cover_images/{{$game->cover_image}}">--}}
{{--    <br><br>--}}

    <small>Uploaded At {{$game->created_at}}</small>

    <div>

        {!!$game->body!!}
    </div>

    <small>Written At {{$game->created_at}} by {{$game->user->name}}</small>
    <hr>
    <a href="/games" class="btn btn-primary">Go Back</a>
    <hr>

    @if(!Auth::guest())
        @if(Auth::user()->id == $game->user_id)
            <a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a>

            {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'game', 'class'=>'float-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection