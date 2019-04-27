@extends('layouts.app')
@section('content')
    <div class="container">
        {{-- <div class="row justify-content-left">
            <div class="card" style="width: 18rem;" class=>'float-right'>
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a> 
                    <a href="#" class="btn btn-secondary">Go somewhere</a>
                    <button type="button" class="btn btn-dark">Dark</button>
                </div>
            </div>

            <div class="card" style="width: 18rem;">
                <img src="gre.jpg" class="card-img-top" alt="Girl in a jacket" width="500" height="600">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div> --}}
        <div class="card-deck">
            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

            
            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

        </div>

        <br/> 


      <div class="card-deck">
            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

            
            <div class="card" style="width: 18rem;"  >
                <img src={{ URL::to('gre.jpg') }} class="card-img-top" alt="Girl in a jacket" >
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    <a href="#" class="btn btn-primary">Edit</a> 
                    <a href="#" class="btn btn-secondary">Delete</a>
                </div>
            </div>

        </div>

        
    </div>
@endsection

