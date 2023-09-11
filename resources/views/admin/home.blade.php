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
                                        <span class="bg-primary text-white avatar">{{$certificates}}</span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                <div class="font-weight-medium">
                                                    Sertifikatlar
                                                </div>
                                                <div class="text-secondary">
                                                    <a href="{{route('certificates.index')}}">Barchasi</a>
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
                                        <span class="bg-twitter text-white avatar">{{$pages}}</span>
                                        </div>
                                        <div class="col">
                                            <div class="font-weight-medium">
                                                Sahifalar
                                            </div>
                                            <div class="text-secondary">
                                                <a href="{{route('pages.create')}}">Yangi kiritish</a>
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

            <div class="page-header d-print-none mt-5">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <h2 class="page-title">So'ngi sertifikatlar</h2>
                    </div>

                    <div class="col-auto ms-auto d-print-none">
                        @include('admin.certificates.filters')
                    </div>
                </div>
            </div>

            <div class="page-body">
                <div class="card">
                    <div class="table-responsive">
                        @include('admin.certificates.table')
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('admin.certificates.create-modal', ['item' => new \App\Models\Certificate()])
@endsection
