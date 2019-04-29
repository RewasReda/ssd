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


                                 
                                <span class="border border-white">
                                    <div class="card-deck">
                                        <div class="card" style="width: 18rem;">
                                            <img style="width:100%" src="storage/cover_images/{{$game->cover_image}}">
                                            <div class="card-body">
                                                <h5 class="card-title"><a href="/games/{{$game->id}}">{{$game->title}}</h5>
                                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                                
                                                
                                                <div class="col px-l-4">
                                                <td><a href="/games/{{$game->id}}/edit" class="btn btn-primary">Edit</a></td>
                                                </div>
                                                <div class="col px-r-5">
                                                <td>
                                                    {!!Form::open(['action' =>['GamesController@destroyAdmin',$game->id],'method'=>'POST'])!!}
                                                    {{Form::hidden('_method','POST')}}
                                                    {{{Form::submit('Delete',['class'=>'btn btn-danger'])}}}
                                                    {!!Form::close()!!}
                                                </td>
                                                
                                                </div>

                                            </div>
                                        </div>
                                    </div> 
                                </span>
                                


                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <p>there is No Games</p>
                        @endif
        </div>
    </div>
@endsection