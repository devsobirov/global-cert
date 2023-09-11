@if(auth()->id())
    <h4><a href="{{route('home')}}">Control Panel</a></h4>
@else
    <h4><a href="{{route('login')}}">Login</a></h4>
@endif
<h3>Change app locale</h3>
@foreach(LaravelLocalization::getLocalesOrder() as $localeCode => $properties)
    @if($localeCode != app()->getLocale())
        <div class="">
            <a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                {{ ucfirst($properties['native']) }}
            </a>
        </div>
    @endif
@endforeach

@php
    $menu = \App\Models\Menu::select('id', 'title', 'parent_id', 'url','order')
        ->whereNull('parent_id')
        ->with(
            ['subMenus' => function ($query) {
                $query->select('id', 'title', 'parent_id', 'url','order')->orderBy('order');
            }],
            ['subPages' => function ($query) {
                $query->select('id', 'title', 'parent_id', 'slug', 'menu_order')->orderBy('menu_order');
            }])
        ->orderBy('order')
        ->get();
@endphp
<h3>Menu & pages</h3>
<ul>
    <li><a href="{{\LaravelLocalization::localizeUrl(route('web.home'))}}">Homepage</a></li>
    @foreach($menu as $link)
        <li>
            <a href="{{$link->getUrl()}}">{{$link->title}}</a>
            @if(count($link->subPages) || count($link->subMenus))
                <ul>
                    @foreach($link->subMenus as $link)
                        <li><a href="{{$link->getUrl()}}">{{$link->title}}</a></li>
                    @endforeach
                    @foreach($link->subPages as $page)
                        <li><a href="{{$page->getUrl()}}">{{$page->title}}</a></li>
                    @endforeach
                </ul>
            @endif
        </li>
    @endforeach
    <li><a href="{{\LaravelLocalization::localizeUrl('contact')}}">Contact</a></li>
</ul>
