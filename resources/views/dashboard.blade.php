{{--@extends('layouts.app')--}}

{{--@section('content')--}}
{{--<div class="container">--}}
{{--    <div class="row justify-content-center">--}}
{{--        <div class="col-md-8">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">Dashboard</div>--}}

{{--                <div class="card-body">--}}
{{--                    @if (session('status'))--}}
{{--                        <div class="alert alert-success" role="alert">--}}
{{--                            {{ session('status') }}--}}
{{--                        </div>--}}
{{--                    @endif--}}

{{--                    You are logged in!--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
{{--@endsection--}}
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <h3>Your Games Here</h3>
                        @if(count($games) > 0)
                            <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach ($games as $game)
                                    <tr>
                                        <td>{{$game->title}}</td>
                                        <td><a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'POST'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>You Have No Games</p>
                        @endif
                            @if(Auth::user()->type =='developer')
                                <a href="/games/create" class="btn btn-primary">Upload a Game</a>
                            @else
                                <a href="/bedeveloperpage" class="btn btn-primary">Become a developer</a>
                            @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection