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

                    <li class="nav-item @if(request()->routeIs('certificates.*')) active @endif">
                        <a class="nav-link" href="{{ route('certificates.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.folder></x-svg.folder>
                            </span>
                            <span class="nav-link-title">Sertifikatlar</span>
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


                    <li class="nav-item @if(request()->routeIs('menu.*')) active @endif">
                        <a class="nav-link" href="{{ route('menu.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.list></x-svg.list>
                            </span>
                            <span class="nav-link-title">Menu</span>
                        </a>
                    </li>

                    <li class="nav-item @if(request()->routeIs('pages.*')) active @endif">
                        <a class="nav-link" href="{{ route('pages.index') }}" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.page></x-svg.page>
                            </span>
                            <span class="nav-link-title">Sahifalar</span>
                        </a>
                    </li>

                    <li class="nav-item dropdown @if(request()->routeIs('blocks.*') || request()->routeIs('employees.*') || request()->routeIs('projects.*') || request()->routeIs('banners.*')) active @endif">
                        <a class="nav-link dropdown-toggle" href="#navbar-content" data-bs-toggle="dropdown" data-bs-auto-close="outside" role="button" aria-expanded="false" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.content></x-svg.content>
                            </span>
                            <span class="nav-link-title">
                            Kontent
                            </span>
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item @if(request()->routeIs('banners.*')) active @endif" href="{{ route('banners.index') }}">
                                Bannerlar
                            </a>
                            @foreach(\App\Models\Block::$types as $block)
                                <a class="dropdown-item @if(request()->url() == route('blocks.show', ['block' => $block])) active @endif" href="{{ route('blocks.show', ['block' => $block]) }}">
                                    Blok - {{ucfirst($block)}}
                                </a>
                            @endforeach
                            <a class="dropdown-item @if(request()->routeIs('employees.*')) active @endif" href="{{ route('employees.index') }}">
                                Hodimlar
                            </a>
                            <a class="dropdown-item @if(request()->routeIs('projects.*')) active @endif" href="{{ route('projects.index') }}">
                                Portfolio
                            </a>
                        </div>
                    </li>

                    <li class="nav-item @if(request()->routeIs('pages.*')) active @endif">
                        <a class="nav-link" href="#" >
                            <span class="nav-link-icon d-md-none d-lg-inline-block">
                                <x-svg.envelope></x-svg.envelope>
                            </span>
                            <span class="nav-link-title">Xabarlar</span>
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
                            <a class="dropdown-item @if(request()->routeIs('settings.*')) active @endif" href="{{ route('settings.index') }}">
                                Umumiy ma'lumotlar
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
