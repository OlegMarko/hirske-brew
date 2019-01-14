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
                    <ul>
                        <li class="">
                            <a href="{{ url('/') }}">Броварня</a>
                        </li>
                        <li class="">
                            <a href="{{ url('/about') }}">Пиво</a>
                        </li>
                    </ul>
                    <div id="arrow_1-l" class="arrow_1" style="left: 30px;">
                        <div class="figure_arrow_left"></div>
                        <div class="figure_arrow_main"></div>
                        <div class="figure_arrow_right"></div>
                    </div>
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
                    <div id="arrow_1-r" class="arrow_1" style="left: 696px;">
                        <div class="figure_arrow_left"></div>
                        <div class="figure_arrow_main"></div>
                        <div class="figure_arrow_right"></div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>
