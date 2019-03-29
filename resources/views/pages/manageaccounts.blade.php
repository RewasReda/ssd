@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Manage Accounts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            

                        <div class="card text-center">
                                <div class="card-header">
                                        <h3>{{$user->name}}</h3>
                                </div>
                                <div class="card-body">
                                  <p class="card-text">email -->{{$user->email}}  <br />   account type --> {{$user->type}} </p>







                                

                           

                               {!!Form::open(['url' =>['UsersController@destroy',$user->id],'method'=>'POST', 'class'=>'float-right'])!!}
                                {{Form::hidden('_method','DELETE')}}
                               {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!}






                                </div>
                                <div class="card-footer text-muted">
                                    created at --> {{$user->created_at}}
                                </div>
                              </div>


                        @endforeach
                    @else 
                    <p>No accounts found</p>
                    @endif




                    



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
