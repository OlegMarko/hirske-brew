<header>
    <div class="main-container row">
        <a href="{{ url('/') }}"><img class="logo" src="{{ asset('assets/logo.png') }}" alt="logo"></a>
        <div class="header-container">
            <nav>
                <div class="button-container">
                    <div id="toggle-nav">
                        <span></span>
                    </div>
                </div>
                <div class="nav-l">
                    <div id="magic_arrow-left" class="arrow_1">
                        <div class="figure_arrow_left"></div>
                        <div class="figure_arrow_main"></div>
                        <div class="figure_arrow_right"></div>
                    </div>
                    <ul>
                        <li class="">
                            <a href="{{ url('/') }}">Броварня</a>
                        </li>
                        <li class="">
                            <a href="{{ url('/about') }}">Пиво</a>
                        </li>
                    </ul>
                </div>
                <div class="nav-r">
                    <ul>
                        <li class="">
                            <a href="{{ url('gallery') }}">Галерея</a>
                        </li>
                        <li class="">
                            <a href="{{ url('contacts') }}">Де придбати</a>
                        </li>
                    </ul>
                    <div id="magic_arrow-right" class="arrow_1">
                        <div class="figure_arrow_left"></div>
                        <div class="figure_arrow_main"></div>
                        <div class="figure_arrow_right"></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
