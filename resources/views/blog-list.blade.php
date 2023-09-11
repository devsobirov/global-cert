@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>Блог</h2>
                    <ul class="bread-list">
                        <li>
                            <div class="speedbar">
                                <a href="{{route('web.home')}}"><span> Homepage</span></a>
                                <span> &raquo; Yangiliklar</span>
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
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="row">
                        @foreach($paginated as $post)
                            <div class="col-md-4 col-sm-6 col-xs-12">
                                @include('partials.post-item', compact('post'))
                            </div>
                        @endforeach
                        </div>

                        {{$paginated->links()}}
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
