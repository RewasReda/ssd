@extends('layouts.app')


@section('content')
    <h1>{{$game->title}}</h1>
    <h5>{{$game->category}}</h5>
    <img style="width:50% ;height 10%" src="/storage/cover_images/{{$game->cover_image}}">
    <br><br>

    <small>Uploaded At {{$game->created_at}}</small>

    <div>

        {!!$game->body!!}
    </div>

    <small>Written At {{$game->created_at}} by {{$game->user->name}}</small>
    <hr>
    <a href="/games" class="btn btn-primary">Go Back</a>
    <hr>
     {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
                {!! Form::open(['action' => 'ReviewController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
            {{-- <div  class="row">
                    <div  class="col-md-6">
                        {{Form::label('name', 'Name')}}
                        {{Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::label('email', 'Email')}}
                        {{Form::text('email', '', ['class' => 'form-control', 'placeholder' => 'Email'])}}
                    </div>
                    <div class="col-md-6">
                        {{Form::hidden('game_id', $game->id, ['class' => 'form-control'])}}
                    </div>
                    <div class="col-md-12">
                        {{Form::label('body', 'Review')}}
                        {{Form::textarea('body', '', ['id' => 'article-ckeditor', 'class' => 'form-control', 'placeholder' => 'Review Text'])}}
                    </div> --}}
                    {{-- <div class="col-md-6">
                        {{Form::hidden('game_id',$game->id,['class'=>'form-control'])}}
                    </div> --}}
                {{-- <div style="margin-top:15px;">
                    {{Form::submit('Add Review', ['class'=>'btn btn-primary'])}}
                </div> --}}
            {{-- </div> --}}

                {{-- {!! Form::close() !!} --}}
        {{-- </div>
     </div>
        <br><br> --}}

        @if(!Auth::guest())
            @if(Auth::user()->id == $game->user_id)
                <a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a>

                {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'game', 'class'=>'float-right'])!!}
                {{Form::hidden('_method','DELETE')}}
                {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                {!!Form::close()!!}
            @endif
        @endif

    {{-- <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h3 class="comment-title"><span class="glyphicon glyphicon-comment"></span> {{$game->review}} Reviews</h3>
{{--            @foreach($game->reviews as $key => $value)--}}
            {{-- @foreach ($reviews as $review) --}}
                {{-- @if($review->game_id==$game->id) --}}
                    {{-- <div class="comment"> --}}
                        {{-- <div class="row"> --}}
                            {{-- <div class="author-info"> --}}
                                {{-- <div class="col-md-9"> --}}
                                    {{-- <div class="author-name"> --}}
                                        {{-- <h4>{{$review->name}}</h4> --}}
                                        {{-- <p class="author-time">{{$review->created_at}}</p> --}}
                                    {{-- </div> --}}
                                {{-- </div>
                            </div>
                        </div> --}}
                        {{-- <div class="comment-content">
                            {!!$review->body!!} --}}
                        {{-- </div> --}}
                    {{-- </br>
                    </br>
                    </div> --}}
                {{-- @endif --}}
            {{-- @endforeach --}}
        {{-- </div>
    </div> --}}
    @endsection