@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>Наши проекты</h2>
                    <ul class="bread-list">
                        <li>
                            <div class="speedbar">
                                <a href="{{route('web.home')}}"><span> Главная</span></a>
                                <span> &raquo; Наши проекты</span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!--Наши проекты-->
    <section id="projects" class="projects section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div id="project-item" class="cbp">
                        @foreach($items as $project)
                            @include('partials.project-item', ['project' => $project])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
