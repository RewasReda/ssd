@extends('layouts.app')

@section('content')
    <div 
    class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5" >
          <h1 class="display-4 font-weight-normal">SMOKEN SEXY DUCK </h1>
         
        </div>
        <div class="product-device box-shadow d-none d-md-block"></div>
        <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>

      </div>
        <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
            <div class="col-md-6 px-0">
              <h1 class="display-4 font-italic">From Game Player to Game Developer</h1>
              <p class="lead my-3">the only thing more fun than playing games is making them. You can make games. All it takes is some time, a willingness to learn and a passion to create. You don't need to be a "coder" to make games. Part of the beauty of games is that they take a variety of skills to make. Art, creativity, and systems thinking are just as important as code. Join us in this journey into game making! </p>
        
            </div> 
            
          </div>
          <div 
          class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
              <div class="col-md-5 p-lg-5 mx-auto my-5" >
                <h1 class="display-4 font-weight-normal">SMOKEN SEXY DUCK </h1>
                <h5 class="display-4 font-italic">Build your own world of Games</h5>
                <p class="lead my-3">  when you are a developer you will be able to upload ur own games and gain money from them , this will cost you only 30$ for LIFETIME </p>
                <a class="btn btn-outline-secondary" href="{{ url('/bedeveloper') }}">start to be a developer</a>
              </div>
              <div class="product-device box-shadow d-none d-md-block"></div>
              <div class="product-device product-device-2 box-shadow d-none d-md-block"></div>
          
            </div>  
      

      
     
      {{-- @if (count ($games) > 0)
          
      @foreach ($games as $game) --}}


    {{-- @endforeach
            <button type ="submit" class="btn btn-primary">Finish Request</button>
        </form>
        {{$games->links()}}

    @else
        <p> No games Found</p>


    @endif --}}
    







@endsection
