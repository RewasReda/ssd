@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
             {{-- <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
 --}}



                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        {{-- <h3>Your Games Here</h3> --}}
                        @if(count($games) > 0)
                            {{-- <table class="table table-striped">
                                <tr>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr> --}}
                               
                               
                                @foreach ($games as $game)                                 
                                    <?php
                                        for ($x = 0; $x <= count($games); $x++)
                                        {
                                            if($x%3==0)
                                            {
                                                echo "\n";
                                            }
                                        }
                                    ?>

                                    <tr>

                                    <div class="card-deck">
                                        <div class="card" style="width: 18rem;" class=>'float-right' class=>'padding: 35px'>
                                            <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                                            <div class="card-body">
                                                <h5 class="card-title">Card title</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                <td><a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a></td>
                                                <td>
                                                    {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'POST'])!!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                                                    {!!Form::close()!!}
                                                </td>
                                            </div>
                                        </div>
                                    </div> 
                                    {{-- <div class="card-deck">
                                        <div class="card">
                                            <img src="..." class="card-img-top" alt="...">
                                            <div class="card-body">
                                            <h5 class="card-title">Card title</h5>
                                            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                            <td><a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a></td>
                                                    <td>
                                                        {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'POST'])!!}
                                                        {{Form::hidden('_method','DELETE')}}
                                                        {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                                                        {!!Form::close()!!}
                                                    </td>
                                            </div>
                                        </div>
                                    </div> --}}



                                        {{-- <td>{{$game->title}}</td> --}}
                                        {{-- <td><a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action' =>['GamesController@destroy',$game->id],'method'=>'POST'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                                            {!!Form::close()!!}
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>there is No Games</p>
                        @endif




                    {{-- </div>
                </div>
            </div> --}}
        </div>
    </div>
@endsection