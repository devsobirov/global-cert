@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>@lang('main.our_projects')</h2>
                    <x-breadcrumbs>
                        <span> &raquo; @lang('main.our_projects')</span>
                    </x-breadcrumbs>
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
