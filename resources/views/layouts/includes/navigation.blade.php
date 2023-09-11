<div class="nav-area">
    <nav class="mainmenu">
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('web.home')}}">Асосий</a></li>
                @foreach($menu as $menuLink)
                    @php $hasSubMenus = count($menuLink->subMenus) > 0;@endphp
                    <li>
                        <a href="{{$menuLink->getUrl()}}">{{$menuLink->title}} @if($hasSubMenus) <i class="fa fa-angle-down"></i>@endif</a>
                        @if($hasSubMenus)
                        <ul class="drop-down">
                            @foreach($menuLink->subMenus as $subMenu)
                                <li><a href="{{$subMenu->getUrl()}}">{{$subMenu->title}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                @endforeach
                @foreach(LaravelLocalization::getLocalesOrder() as $localeCode => $properties)
                    @if($localeCode != app()->getLocale())
                        <li class="">
                            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                {{ ucfirst($properties['native']) }}
                            </a>
                        </li>
                    @endif
                @endforeach
            </ul>
        </div>
    </nav>
    <ul class="social">
        <li><a href="{{$settings->facebook ?? '#'}}"><i class="fa fa-facebook"></i></a></li>
        <li><a href="{{$settings->telegram ?? '#'}}"><i class="fa fa-telegram"></i></a></li>
        <li><a href="{{$settings->vk ?? '#'}}"><i class="fa fa-vk"></i></a></li>
        <li><a href="{{$settings->youtube ?? '#'}}"><i class="fa fa-youtube-square"></i></a></li>
    </ul>
</div>
