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
                        Sahifani tahrirlash - {{$item->title}}
                    </h2>
                </div>
                <a href="{{route('pages.index')}}" class="btn btn-primary">Barcha sahifalar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('pages.update', $item->id) }}" method="POST" class="card mb-3" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <input type="hidden" name="general" value="general">
                <div class="card-body">
                    <div class="mb-3">
                        <div class="row">
                            <div class="col-md-{{$item->image ? 6 : 12}}">
                                <div class="mb-3">
                                    <div class="form-label">Sahifa shapkasi uchun yangi rasm tanlash</div>
                                    <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            @if($item->image)
                            <div class="col-md-6">
                                <img src="{{asset($item->image)}}" class="p-1 rounded border mt-4 d-block w-100" alt="">
                            </div>
                            @endif
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Sahifa uchun URL (faqat so'ngi qismi) </label>
                        <input type="text" name="slug" class="form-control @error('slug') is-invalid @enderror" placeholder="about-us" value="{{ $item->slug ?? old('slug') }}">
                    </div>
                    @error('slug')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <div class="form-label">Ona menuni tanlang</div>
                        <select name="parent_id" id="parent_id" class="form-select">
                            <option value="">Ona menu mavjud emas</option>
                            @foreach($menus as $parent)
                                <option value="{{$parent->id}}" @if($parent->id == $item->menu_id) selected @endif>{{$parent->title}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Menudagi navbat</div>
                        <input type="number" name="menu_order" placeholder="3" class="form-control @error('menu_order') is-invalid @enderror" value="{{ $item->menu_order ?? old('menu_order') }}">
                        @error('menu_order')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </div>

            </form>

            @foreach(\LaravelLocalization::getLocalesOrder() as $locale => $data)
                <form action="{{ route('pages.update', $item->id) }}" method="POST" class="card mb-3" autocomplete="off">
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
                            <label class="form-label">Meta-title - {{$data['native']}}</label>
                            <input type="text" name="lang[{{$locale}}][meta_title]" class="form-control @error('lang.'.$locale.'.meta_title') is-invalid @enderror" placeholder="..." value="{{ $item->getTranslation('meta_title', $locale, false) }}">
                        </div>
                        @error('lang.'.$locale.'.meta_title')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label">Meta-description - {{$data['native']}}</label>
                            <input type="text" name="lang[{{$locale}}][meta_description]" class="form-control @error('lang.'.$locale.'.meta_description') is-invalid @enderror" placeholder="..." value="{{ $item->getTranslation('meta_description', $locale, false) }}">
                        </div>
                        @error('lang.'.$locale.'.meta_description')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror

                        <div class="mb-3">
                            <label class="form-label required">Sahifa kontenti - {{$data['native']}}</label>
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
