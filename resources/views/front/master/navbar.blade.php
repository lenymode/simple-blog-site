<nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="/">Metro Vlogs</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
            aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="/">Home</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('contact')}}">Contact</a></li>
                <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('about')}}">About</a></li>

                @can('isAdmin')
                    {{-- @if (Auth::user() && Auth::user()->role_id == '1') --}}
                    {{-- @if (Auth::check()) --}}
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('users') }}">Users</a></li>
                    <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('createblog')}}">Create Blog</a></li>
                    {{-- @endif --}}
                    {{-- @endif --}}
                @endcan

                @if (Auth::guest())
                    <li class="nav-item dropdown ms-auto"> <a class="nav-link px-lg-3 py-3 py-lg-4" href="#"
                            class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>

                        <div class="dropdown-menu dropdown-menu-end">

                            <div class="container-fluid">
                                <form class=""action="{{ route('login') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="">Email</label>
                                        <input class="form-control" name="email" id="email" :value="old('email')"
                                            required autofocus type="text">
                                    </div>
                                    <div class="form-group">
                                        <label class="">Password</label>
                                        <input class="form-control" name="password" id="password" type="password"
                                            required autocomplete="current-password">
                                        <br class="">
                                    </div>
                                    <button type="submit" id="btnLogin" class="btn btn-success btn-sm">Login</button>
                                    <a href="{{ route('register') }}">Sing-Up</a>
                                    <br>

                                </form>

                            </div>
                        </div>
                    </li>
                @else
                    <li class="nav-item dropdown ms-auto"> <a class="nav-link px-lg-3 py-3 py-lg-4" href="#"
                            class="nav-link dropdown-toggle" data-bs-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="container-fluid">
                                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf

                                    <x-responsive-nav-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                                        {{ __('Log Out') }}
                                    </x-responsive-nav-link>
                                </form>
                            </div>
                @endif
            </ul>
        </div>
    </div>
</nav>
