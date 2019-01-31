<nav class="navbar navbar-dark main-nav" id="main-nav">
        <div>
            <button id="menu" class="menu-bar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <div class="uno"></div>
                <div class="dos"></div>
                <div class="tres"></div>
            </button>
            <a href="#"><img src="/assets/logo-claro.svg" class="lg_claro img-fluid"></a>
        </div>
        @guest
        <a href="/login"> <img src="assets/power-sign.svg"> <span class="text-sesion">Iniciar sesión</span></a>
        @else
            <a  href="{{ route('logout') }}"
            onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <img src="/assets/power-sign.svg"> <span class="text-sesion">{{ __('Cerrar Session') }}</span>
            </a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>

        @endguest

    </nav>

    <div class="menu-main collapse bg-negro" id="navbarToggleExternalContent">
        <div class="">
            <ul class="menu navbar-nav">
                @foreach($categories as $cat)
                <li class="item-menu"><a href="/{{ $cat->slug }}" class="nav-link">{{ $cat->name }}</a></li>
                @endforeach

            </ul>
        </div>
        <div class="bg_menu" id="navbarToggleExternalContent"></div>
</div>
