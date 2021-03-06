
      <nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-laravel">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{ config('app.name', 'SSD') }}
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">


                    @guest
                        

                    <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          
                          
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                          </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/games') }}">Games</a>
                            
                        </li>


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categories <span class="caret"></span>
                            </a>
                            

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ url('/games/ac/SearchByGamesCategories') }}" class="dropdown-item">Action</a>  
                                <a href="{{ url('/games/fps/SearchByGamesCategories') }}" class="dropdown-item">FPS</a>
                                <a href="{{ url('/games/ho/SearchByGamesCategories') }}" class="dropdown-item">Horror</a>
                                <a href="{{ url('/games/th/SearchByGamesCategories') }}" class="dropdown-item">thirdPerson</a>
                          
                            
                             
                            </div>
                        </li>
                        


                    @else


                    <li class="nav-item active">
                            <a class="nav-link" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item">
                            <a class="nav-link" href="{{ url('/about') }}">About</a>
                          </li>
                         
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/contact') }}">Contact Us</a>
                              </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/games') }}">Games</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                Categories <span class="caret"></span>
                            </a>
                            

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ url('/games/ac/SearchByGamesCategories') }}" class="dropdown-item" >Action</a>  
                                <a href="{{ url('/games/fps/SearchByGamesCategories') }}" class="dropdown-item">FPS</a>
                                <a href="{{ url('/games/ho/SearchByGamesCategories') }}" class="dropdown-item">Horror</a>
                                <a href="{{ url('/games/th/SearchByGamesCategories') }}" class="dropdown-item">thirdPerson</a>
                          
                            
                            </div>
                        </li>
                        


                    @if (Auth::user()->type == 'user' )
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/bedeveloperpage') }}">Be Developer</a>
                    </li> 

                @elseif (Auth::user()->type == 'developer' )
                   <li class="nav-item">
                    <a class="nav-link" href="/games/create">Upload Game</a>
                   </li> 
               @endif  
                
                        
                    @endguest



                </ul>
                

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    <form class="form-inline" action= "{{ url('/search') }}" method = "get" role="search">
                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-outline-light" type="submit">Search</button>
                      </form>
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route ('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>  
                        @endif

                    @else

                    @if (Auth::user()->type == 'admin' )
                    <li class="nav-item">
                      <a class="nav-link" href="{{ url('/control') }}">Control</a>
                    </li> 
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>
                            

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a href="/dashboard" class="dropdown-item">Dashboard</a>  
                          
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        
                    @endguest
                </ul>
            </div>
            
        </div>
    </nav>