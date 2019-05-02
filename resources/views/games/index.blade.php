@extends('layouts.app')

<style>
.big_check{
    width:30px;
    height:30px;
}
</style>
@section('content')
@if(Request::server('HTTP_REFERER') == 'http://127.0.0.1:8000/addToCart')
    <div class="alert alert-success" role="alert">
        
    </div>
@endif
    @if (count ($games) > 0)
    
        <form action="/addToCart" method="POST">
            
            @csrf
        @foreach ($games as $game)
            {{-- <div class="card card-body bg-light">
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
            </div> --}}


            <div class="border border-white">
                    <div class="card-deck" style="width:500px">
                            {{-- <div class="card" style="width:50%"> --}}

                  <div class="card-body" >

                    <div class = "float-left">
                      <strong class="text-primary">{{$game->category}}</strong>
                      <h3 ><a href="/games/{{$game->id}}">{{$game->title}}</a></h3>
                      <div class="text-muted">{{$game->created_at}}</div>
                    </div>

                    <div class = "float-right">
                    <img style="width:200px" src="storage/cover_images/{{$game->cover_image}}">
                    </div>
                    

                    </div>
                    <div>
                            <input name = {{ $game->id }} type="checkbox" class="big_check">
                        </div>
                {{-- </div> --}}
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
