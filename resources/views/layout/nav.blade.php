<div class="container-fluid bg-dark">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand text-white" href="{{url("/show")}}">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    @if(Auth::check())
                        <a href="{{url("/create")}}"><button class="btn btn-primary">Create <i class="fa fa-plus mr-auto"></i></button> </a>
                    @endif
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user mr-2"></i>
                        @if(Auth::check())
                            {{Auth::user()->name}}

                            @else
                            Account
                            @endif
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        @if(Auth::check())
                        <a class="dropdown-item" href="{{url("/logout")}}">Logout</a>
                        @else
                        <a class="dropdown-item" href="{{url("/login")}}">Login</a>
                        <a class="dropdown-item" href="{{url("/register")}}">Register</a>
                            @endif
                    </div>
                </li>
            </ul>
        </div>
    </nav>

</div>
