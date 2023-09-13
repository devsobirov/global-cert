@extends('admin.layouts.app')

@section('custom_styles')
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
@endsection
@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Sahifalar
                    </div>
                    <h2 class="page-title">
                        Yangi sahifa kiritish
                    </h2>
                </div>
                <a href="{{route('pages.index')}}" class="btn btn-primary">Barcha sahifalar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('pages.store') }}" method="POST" class="card" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label required">Sahifa uchun URL (faqat so'ngi qismi) </label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="about-us" value="{{ old('slug') }}">
                    </div>
                    @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <div class="form-label">Sahifa shapkasi uchun rasm</div>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Ona menuni tanlang</div>
                        <select name="parent_id" id="parent_id" class="form-select">
                            <option value="">Ona menu mavjud emas</option>
                            @foreach($menus as $parent)
                                <option value="{{$parent->id}}">{{$parent->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Menudagi navbat</div>
                        <input type="number" name="menu_order" placeholder="3" class="form-control @error('menu_order') is-invalid @enderror" value="{{ old('menu_order') }}">
                        @error('menu_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Sarlavha - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="..." value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Meta-title - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="meta_title" class="form-control @error('meta_title') is-invalid @enderror" placeholder="..." value="{{ old('meta_title') }}">
                    </div>
                    @error('meta_title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Meta-description - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="meta_description" class="form-control @error('meta_description') is-invalid @enderror" placeholder="..." value="{{ old('meta_description') }}">
                    </div>
                    @error('meta_description')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Sahifa kontenti - {{config('app.defaultLocaleNative')}}</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="...">{{ old('content') }}</textarea>
                    </div>
                    @error('content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>

            </form>

        </div>
    </div>

@endsection
@section('custom_scripts')
    @include('admin.layouts.includes._summernote-init')
@endsection
