@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Approve Games</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($games) > 0)
                        @foreach ($games as $game)
                            

                        <div class="card text-center">
                                <div class="card-header">
                                        <h3>{{$game->title}}</h3>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">category --> {{$game->category}} </p>

                                {!!Form::open(['action' =>['GamesController@approve', $game->id],'method'=>'POST'])!!}
                                {{Form::submit('Approve',['class'=>'btn btn-primary'])}}
                                {!!Form::close()!!}


                                </div>
                                <div class="card-footer text-muted">
                                    created at --> {{$game->created_at}}
                                </div>
                              </div>


                        @endforeach

                    @else 
                    <p>No games found</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
