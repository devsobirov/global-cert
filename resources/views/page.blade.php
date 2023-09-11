@extends('layouts.web')

@section('meta_title', $page->meta_title)
@section('meta_description', $page->meta_description)

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>{{$page->title}}</h2>
                    <ul class="bread-list">
                        <li>
                            <div class="speedbar">
                                <a href="{{route('web.home')}}"><span> Homepage</span></a>
                                <span> &raquo; {{$page->title}}</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <section id="blog-main" class="blog-main archive single section">
        <div class="container">
            <div class="row">
                <div class="blog-main">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            <div id='dle-content'><div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="single-blog">
                                        <div class="blog-post">
                                            <div class="blog-info">
                                                <h2>{!! $page->title !!}</h2>
                                                <div class="text-justify full-text">
                                                    {!! $page->content !!}
                                                </div>
                                                <br clear="all">
                                                <div class="blog-bottom">
                                                    <ul class="share">
                                                        <script src="//yastatic.net/es5-shims/0.0.2/es5-shims.min.js"></script>
                                                        <script src="//yastatic.net/share2/share.js"></script>
                                                        <div class="ya-share2" data-services="collections,vkontakte,facebook,odnoklassniki,moimir,twitter,blogger,linkedin"></div>
                                                    </ul>
                                                    <ul class="prev-next">
                                                        <li class="prev"><a href="#" onclick="history.back();return false;"><i class="fa fa-angle-double-left"></i> Назад</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 sticky-area">
                        @include('partials.sidebar', compact('latestPosts'))
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
