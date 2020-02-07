<!-- Navbar Area -->
<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="img/core-img/logo(2).png" height="100px" width='180px'
                                               alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="">Создать тест</a></li>
                        <li><a href="">Контакты</a></li>
                    </ul>

                    <!-- Search Button -->
                    <div class="search-area">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Поиск">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    <!-- Register / Login -->
                    <div class="register-login-area">
                        @guest

                            <a class="nav-link btn" href="{{ route('login') }}">{{ __('Вход') }}</a>
                            @if (Route::has('register'))
                                <a class="btn active" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                            @endif
                    </div>

                    @else

                        <div class="login-state d-flex align-items-center">
                            <div class="user-name ">
                                <div class="dropdown">
                                    <a class="dropdown-toggle" href="#" role="button" id="userName"
                                       data-toggle="dropdown" aria-haspopup="true"
                                       aria-expanded="false">{{Auth::user()->name}}</a>

                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="#">Профиль</a>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                           onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            {{ __('Выход') }}
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                              style="display: none;">
                                            @csrf
                                        </form>

                                    </div>
                                </div>
                            </div>
                            @endguest
                        </div>
                        <!-- Nav End -->
                </div>
            </div>
        </nav>
    </div>
</div>
