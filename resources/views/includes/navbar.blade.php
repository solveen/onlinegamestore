
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <a class="navbar-brand" href="/">GAMESTORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="{{ url('/home')}}"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-gamepad"></i> Game Categories
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/shooting"> Shooting</a>
                    <a class="dropdown-item" href="/rpg"> RPG</a>
                    <a class="dropdown-item" href="/racing"> Racing</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/games">All Games</a>
                </div>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="/accessory"><i class="fas fa-headset"></i> Accessories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/post">Posts</a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="/contactus"><i class="fas fa-phone"></i> Contact us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/aboutus">About us</a>
            </li>


        </ul>

        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            <li class="nav-item">
                <a class="nav-link" href="/news"><i class="fas fa-newspaper"></i> News</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbardrop" data-toggle="dropdown">
                    <i class="fas fa-user"></i> User Account
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/userprofile">User profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/orderview">Ordered items</a>
                    <a class="dropdown-item" href="/viewwishlist">Wishlist</a>

                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/help"><i class="fas fa-question-circle" href="/help" ></i> Help </a>

            </li>
            @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->first_name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
</nav>
