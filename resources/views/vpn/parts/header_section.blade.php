            <header class="header block">
                <div class="header__logo">
                    <a href="/" class="header__logo-link">
                        <img
                            src="img/logo.svg"
                            alt=""
                            class="header__logo-pic"
                        />
                    </a>
                    <span class="header__logo__text">Lasles<b>VPN</b></span>
                </div>
                <div class="header__menuButton">
                    <div class="burger burger__close"></div>
                </div>
                <nav class="header__nav hidden">
                    <ul class="header__list">
                        <li class="header__item">
                            <a href="#!" class="header__link">About</a>
                        </li>
                        <div class="header__line"></div>
                        <li class="header__item">
                            <a href="#!" class="header__link">Features</a>
                        </li>
                        <div class="header__line"></div>
                        <li class="header__item">
                            <a href="#!" class="header__link">Pricing</a>
                        </li>
                        <div class="header__line"></div>
                        <li class="header__item">
                            <a href="#!" class="header__link">Testimonials</a>
                        </li>
                        <div class="header__line"></div>
                        <li class="header__item">
                            <a href="#!" class="header__link">Help</a>
                        </li>
                        <div class="header__line"></div>
                        <li class="header__item">
                            <a href="quiz" class="header__link">Quiz</a>
                        </li>
                        <li class="header__item">
                            <a href="{{ route('posts') }}" class="header__link">Blog</a>
                        </li>
                    </ul>
                </nav>
                <div class="header__sign hidden">

                    @guest
                    <button onclick="location.href = '{{ route('login') }}';" class="header__signin">Sing In</button>
                    <button onclick="location.href = '{{ route('register') }}';" class="header__signup">Sing Up</button>
                    @else

                    <button href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header__signin">Sing Out</button>
                    @endguest
                </div>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </header>
