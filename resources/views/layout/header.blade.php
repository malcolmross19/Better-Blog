<header>
    <div class="container-fluid mb-3">
        <nav class="navbar navbar-expand-md navbar-dark rounded-bottom font-weight-bold">
            {{--Branding Logo / Homepage link--}}
            <a class="navbar-brand pb-2" href="{{ route('splash') }}">
                <img style="height: 50px;" src="{{ asset('images/logo.png') }}" alt="Logo">
            </a>

            {{--Hamburger Menu--}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbar">
                {{--Navigational Links--}}
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link nav-active">Active Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link">Link</a>
                    </li>
                </ul>

                {{--Login / User Links--}}
                <ul class="nav navbar-nav ml-auto">
                    {{--Check if user is logged in--}}

                    {{--COMMENTED OUT UNTIL USER AUTH IS IMPLEMENTED--}}
                    {{--@if (Auth::guest())--}}
                        <li class="nav-item ml-0 ml-md-auto">
                            <a class="nav-link" href="#">Login</a>
                        </li>

                    {{--COMMENTED OUT UNTIL USER AUTH IS IMPLEMENTED--}}
                    {{--@else--}}
                        <li class="dropdown nav-item">
                            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                User

                                {{--COMMENTED OUT UNTIL USER AUTH IS IMPLEMENTED--}}
                                {{--{{ Auth::user()->name }} <span class="caret"></span>--}}
                            </a>

                            <ul class="dropdown-menu border-0 dropdown-menu-right" role="menu">
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link font-weight-bold pl-2" href="#">Profile</a>
                                </li>
                                <li class="nav-item">
                                    <a class="dropdown-item nav-link font-weight-bold pl-2" href="#"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="#" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    {{--COMMENTED OUT UNTIL USER AUTH IS IMPLEMENTED--}}
                    {{--@endif--}}
                </ul>
            </div>
        </nav>
    </div>
</header>