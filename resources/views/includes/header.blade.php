<header class=" header" >
    <div class="container">
        <div class="header__row">
            <div class="header__title ">
                <a href="{{ route('main') }}">ATL</a>
            </div>
            <nav class="header__navigation">
                <div class=" ">
                    <ul class=" d-flex">
                        @if(Auth::user() )
                        <li class="nav-item navbar__nav-item ">
                           <a href="{{ route('profile.create_order') }}">Усулги</a>
                         </li>
                        @endif
                    @guest
                        @if (Route::has('login'))
                            <li class="nav-item">
                                <a class="nav-link nav-item navbar__nav-item hover" href="{{ route('login') }}">{{ __('Войти') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Выйти') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>

                      @endguest

                    </ul>
                  </div>
            </nav>
        </div>
    </div>

</header>
