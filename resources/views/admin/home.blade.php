@extends('admin.layouts.app')

@section('custom_styles')

@endsection

@section('content')
    <div class="page-body">
        <div class="container-xl">

            <div class="row row-deck row-cards">
                <div class="col-12">
                    <div class="row row-cards">
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <span class="bg-primary text-white avatar">{{$posts}}</span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <div class="font-weight-medium">
                                                    Yangiliklar
                                                </div>
                                                <div class="text-secondary">
                                                    <a href="{{route('posts.create')}}">Yangi kiritish</a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <span class="bg-twitter text-white avatar">{{$banners}}</span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Bannerlar
                                            </div>
                                            <div class="text-secondary">
                                                <a href="{{route('banners.create')}}">Yangi kiritish</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="card card-sm">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col-auto">
                                        <span class="bg-facebook text-white avatar">{{$users}}</span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Foydalanuvchilar
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
