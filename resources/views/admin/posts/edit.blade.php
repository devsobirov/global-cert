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
                        Yangliliklar
                    </div>
                    <h2 class="page-title">
                        Tahrirlash - #{!! $item->id  !!}
                    </h2>
                </div>
                <a href="{{route('posts.index')}}" class="btn btn-primary">Barcha yangliliklar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('posts.update', $item->id) }}" method="POST" class="card mb-3" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <input type="hidden" name="general" value="general">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <div class="form-label">Yanglilik uchun yangi rasm tanlash</div>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-md-2">
                            <img src="{{asset($item->image)}}" class="p-1 rounded border mt-4" style="display: flex; width: 150px" alt="">
                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

            @foreach(\LaravelLocalization::getLocalesOrder() as $locale => $data)
            <form action="{{ route('posts.update', $item->id) }}" method="POST" class="card mb-3" autocomplete="off">
                @csrf @method('PATCH')
                <div class="card-body">

                    <div class="mb-3">
                        <label class="form-label required">Sarlavha - {{$data['native']}}</label>
                        <input type="text" name="lang[{{$locale}}][title]" class="form-control @error('lang.'.$locale.'.title') is-invalid @enderror" placeholder="..." value="{{ $item->getTranslation('title', $locale, false) }}">
                    </div>
                    @error('lang.'.$locale.'.title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Yanglilik matni - {{$data['native']}}</label>
                        <textarea name="lang[{{$locale}}][content]" class="form-control @error('lang.'.$locale.'.content') is-invalid @enderror" placeholder="...">{!! $item->getTranslation('content', $locale, false)  !!}</textarea>
                    </div>
                    @error('lang.'.$locale.'.content')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>
            @endforeach
        </div>
    </div>

@endsection
@section('custom_scripts')
    @include('admin.layouts.includes._summernote-init')
@endsection
