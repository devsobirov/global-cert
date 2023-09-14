@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>@lang('main.news')</h2>
                    <x-breadcrumbs>
                        <span> &raquo; @lang('main.news')</span>
                    </x-breadcrumbs>
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
