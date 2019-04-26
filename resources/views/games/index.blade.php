@extends('layouts.app')


@section('content')
    <h1>this is games</h1>
    @if (count ($games) > 0)

        @foreach ($games as $game)
            <div class="card card-body bg-light">
                <div class="card card-body bg-light">
                    <div class="col-md-4 col-sm-4">
                        <img style="width:100%" src="storage/cover_images/{{$game->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/games/{{$game->id}}">{{$game->title}}</a></h3>
                        <small>Written on {{$game->created_at}} by {{$game->user->name}}</small>
                    </div>

                </div>

            </div>
        @endforeach
        {{$games->links()}}

    @else
        <p> No games Found</p>


    @endif
@endsection
