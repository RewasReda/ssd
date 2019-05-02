@extends('layouts.app')
@section('content')
    <div class="container">
        @foreach($games as $game)
            <div class="card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
						{{ $game['title'] }} <br>
                    </p>
				</div>
            </div>
		@endforeach
		<form action="/addToCart/finish" method ="POST">
			<?php $i=0;?>
			@csrf
			@foreach( $all as $one )
				<input type="hidden" name={{$i++}} value={{$one}}>
			@endforeach
			<button class="btn btn-primary" type="submit">Finish request</button>
		</form>
		
    </div>
@endsection