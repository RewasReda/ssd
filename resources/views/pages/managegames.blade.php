@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-left">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        @if(count($games) > 0)
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
                                        <div class="card" style="width: 18rem;">
                                            <img style="width:100%" src="storage/cover_images/{{$game->cover_image}}">
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

                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>there is No Games</p>
                        @endif
        </div>
    </div>
@endsection