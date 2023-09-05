<div class="navbar-expand-md">
    <div class="collapse navbar-collapse" id="navbar-menu">
        <div class="navbar navbar-light">
            <div class="container-xl">
                <ul class="navbar-nav">

                    <li class="nav-item @if(request()->routeIs('home')) active @endif">
                        <a class="nav-link" href="{{ route('home') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block"><!-- Download SVG icon from http://tabler-icons.io/i/home -->
                                <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><polyline points="5 12 3 12 12 3 21 12 19 12" /><path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7" /><path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6" /></svg>
                            </span>
                            <span class="nav-link-title">
                                Bosh panel
                            </span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('banners.*')) active @endif">
                        <a class="nav-link" href="{{ route('banners.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.image></x-svg.image>
                            </span>
                            <span class="nav-link-title">Bannerlar</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('posts.*')) active @endif">
                        <a class="nav-link" href="{{ route('posts.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.news></x-svg.news>
                            </span>
                            <span class="nav-link-title">Yangiliklar</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown @if(request()->routeIs('users.*')) active @endif">
                        <a class="nav-link dropdown-toggle" href="#navbar-extra" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.settings></x-svg.settings>
                            </span>
                            <span class="nav-link-title">
                            Sozlamalar
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item @if(request()->routeIs('users.*')) active @endif" href="{{ route('users.index') }}">
                                Foydalanuvchilar
                            </a>
                            <a class="dropdown-item" href="/translations" target="_blank">
                                Tarjimalar
                            </a>
                            <a class="dropdown-item" href="{{route('log-viewer.index')}}" >
                                Loglar jurnali
                            </a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</div>
