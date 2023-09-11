@extends('layouts.web')

@section('meta_title', $post->title)
@section('meta_description', substr(strip_tags($post->content), 0, 250))

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>{{$post->title}}</h2>
                    <ul class="bread-list">
                        <li>
                            <div class="speedbar">
                                <a href="{{route('web.home')}}"><span> Homepage</span></a>
                                <a href="{{route('web.blog.index')}}"><span> &raquo; Blog</span></a>
                                <span> &raquo; {{$post->title}}</span>
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
                                                <h2>{!! $post->title !!}</h2>
                                                <div class="w-100">
                                                    <img src="{{asset($post->image)}}" class="d-block" style="width: 100%" alt="{{$post->title}}">
                                                </div>
                                                <div class="meta">
                                                    <span><i class="fa fa-clock-o"></i>{{$post->created_at?->format('d-M-Y, H:i')}}</span>
                                                    <span><i class="fa fa-eye"></i>{{$post->views}}</span>
                                                </div>
                                                <div class="text-justify full-text">
                                                    {!! $post->content !!}
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
                        <aside class="blog-sidebar">

                            <div class="single-sidebar subscribe post-tab">
                                <h2><span>Latest news</span></h2>
                                <div class="single-widget subscribe">
                                    @foreach($latestPosts as $post)
                                        @include('partials.post-sidebar-item', compact('post'))
                                    @endforeach
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
