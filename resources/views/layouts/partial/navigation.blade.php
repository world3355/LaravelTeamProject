<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav mr-auto">
                <!-- menu -->
				<li class="nav-item">
                    <a class="nav-link" href="#">조원소개</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="#">현지학기제</a>
                </li>
				<li class="nav-item">
                    <a class="nav-link" href="#">질의응답</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('sessions.create') }}">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('users.create'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.create') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('sessions.destroy') }}">{{ __('Logout') }}</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
