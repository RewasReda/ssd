@extends('layouts.app')

<style>
.big_check{
    width:30px;
    height:30px;
}
</style>
@section('content')
    @if (count ($games) > 0)
        <form action="/addToCart" method="POST">
            
            @csrf
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
                <div>
                    <input name = {{ $game->id }} type="checkbox" class="big_check">
                </div>
            </div>
        @endforeach
            <button type ="submit" class="btn btn-primary">Finish Request</button>
        </form>
        {{$games->links()}}

    @else
        <p> No games Found</p>


    @endif
@endsection
