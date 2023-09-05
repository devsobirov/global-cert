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
                        Yangiliklar
                    </div>
                    <h2 class="page-title">
                        Yangi yangilik kiritish
                    </h2>
                </div>
                <a href="{{route('courses.index')}}" class="btn btn-primary">Barcha yangiliklar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('posts.store') }}" method="POST" class="card" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="card-body">

                    <div class="mb-3">
                        <div class="form-label">Yangilik uchun rasm</div>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required accept="image/*">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Sarlavha - O'zbekcha</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="..." value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Yangiliklar matni - O'zbekcha</label>
                        <textarea name="content" class="form-control @error('content') is-invalid @enderror" placeholder="...">{{ old('content') }}</textarea>
                    </div>
                    @error('title')
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
