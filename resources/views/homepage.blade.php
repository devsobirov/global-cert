@extends('layouts.web')

@section('content')
    <!--Слайдер-->
    <section class="hero-area">
        <div class="slider-one">
            @foreach($banners as $slide)
                @include('partials.slide', ['slide' => $slide])
            @endforeach
        </div>
    </section>

    <!--3 блока под слайдером-->
    <section class="features">
        <div class="container">
            <div class="row">
                @foreach($blocks->where('type', \App\Models\Block::TYPE_FEATURE) as $feature)
                    @include('partials.feature-item', compact('feature'))
                @endforeach
            </div>
        </div>
    </section>

    <!--Наши услуги-->
    <section id="services" class="services section">
        <div class="container">
            <div class="row">
                @foreach($blocks->where('type', \App\Models\Block::TYPE_SERVICE) as $service)
                    @include('partials.service-item', compact('service'))
                @endforeach
            </div>
        </div>
    </section>


    <!--Наши проекты-->
    <section id="projects" class="projects section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">Наши проекты</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="project-item" class="cbp">
                       @foreach($projects as $project)
                            @include('partials.project-item', ['project' => $project])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--Счетчики особенностей-->
    <div id="counter" class="counter section" data-stellar-background-ratio="0.5">
        <div class="container">
            <div class="row">
                @foreach($blocks->where('type', \App\Models\Block::TYPE_COUNTER) as $counter)
                    @include('partials.counter-item', compact('counter'))
                @endforeach
            </div>
        </div>
    </div>

    <!--Наша команда-->
    <section id="team" class="team section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">Наша команда</div>
                        <p>Краткое описание к данному блоку или любой текст.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($team as $member)
                    @include('partials.team-member', ['member' => $member])
                @endforeach
            </div>
        </div>
    </section>

    <!--Наши новости-->
    <section id="blog-main" class="blog-main section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title">
                        <div class="sec-t">новости компании</div>
                        <p>Краткое описание к данному блоку или любой текст.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="blog-main">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="blog-slider">
                            @foreach($posts as $post)
                                @include('partials.post-item', compact('post'))
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
