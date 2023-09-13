@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Slayder bannerlari
                    </div>
                    <h2 class="page-title">
                        Yangi banner kiritish
                    </h2>
                </div>
                <a href="{{route('banners.index')}}" class="btn btn-primary">Barcha bannerlar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('banners.store') }}" method="POST" class="card" enctype="multipart/form-data" autocomplete="off">
                @csrf

                <div class="card-body">

                    <div class="mb-3">
                        <div class="form-label">Banner uchun rasm</div>
                        <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" required accept="image/*">
                        @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Navbat</div>
                        <input type="number" name="order" placeholder="3" class="form-control @error('order') is-invalid @enderror" value="{{ old('order') }}">
                        @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Intro (kichik tekst, ixtiyoriy) - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Sanoat o'quv" value="{{ old('intro') }}">
                    </div>
                    @error('intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Asosiy tekst - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="10 yillik tajriba" value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Havola uchun tekst (agar bo'lsa) - {{config('app.defaultLocaleNative')}}</label>
                        <input type="text" name="btn_label" class="form-control @error('btn_label') is-invalid @enderror" placeholder="Batafsil" value="{{ old('btn_label') }}">
                    </div>
                    @error('btn_label')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="1" @if(old('is_external_link')) checked @endif name="is_external_link">
                            <span class="form-check-label">Tashqi sayt uchun havola (Agar havola bo'lsa va u boshqa saytga olib borsa)</span>
                        </label>
                        @error('is_external_link')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label required">Havola uchun URL (agar havola bo'lsa) - agar ichki sahifa bolsa "Sahifa" urli, agar tashqi bolsa to'liq havola</label>
                        <input type="text" name="btn_link" class="form-control @error('btn_link') is-invalid @enderror" placeholder="about-us" value="{{ old('btn_link') }}">
                    </div>
                    @error('btn_link')
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
