<header class="navbar navbar-fixed-top navbar-inverse">
    <div class="container">
        <a href="{{ url('/') }}" id="logo">E-System</a>
        <nav>
            <ul class="nav navbar-nav navbar-right">
            @if(!Auth::check())
                <li><a href="{{ url('/') }}">Help</a></li>
                <li><a href="{{ url('/about') }}">About</a></li>
                <li><a href="{{ url('/signup') }}">Signup</a></li>
                <li><a href="{{ url('/login') }}">Login</a></li>
            @else
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        Account 
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('users.show', [Auth::user()->id]) }}">Profile</a></li>
                        <li><a href="{{ route('users.edit', [Auth::user()->id]) }}">Edit Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="{{ url('/logout') }}">Logout</a></li>
                    </ul>
                </li>
            @endif
            </ul>
        </nav>
    </div>
</header>
