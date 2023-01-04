
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laerning Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                          
                        <li class="nav-item">
                                    <a class="nav-link" href="/homepage">{{ __('Home') }}</a>
                                </li>

                            <li class="nav-item">
                                    <a class="nav-link" href="/about">{{ __('about') }}</a>
                                </li>
                            

                                <li class="nav-item">
                                    <a class="nav-link" href="/contact">{{ __('Contact') }}</a>
                                </li>
                              
                                @if(Auth::check())
                                <li class="nav-item">
                                <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
                            </li>
                            
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf      
                                </form>
                                @else
                                <li class="nav-item">
                                    <a class="nav-link" href="\register">Register</a>
                                </li>
                                   <li class="nav-item">
                                 <a class="nav-link" href="\login">Login</a>
                             </li>   
                              @endif    

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/login" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                              Member    
                            </a>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>