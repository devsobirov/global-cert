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

            @if ($message = Session::get('success'))
                <div class="alert alert-success alert-dismissible">
                    <div class="d-flex">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M5 12l5 5l10 -10"></path>
                            </svg>
                        </div>
                        <div>
                            {{ $message }}
                        </div>
                    </div>
                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                </div>
            @endif

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
                        <label class="form-label required">Intro (kichik tekst, ixtiyoriy) - O'zbekcha</label>
                        <input type="text" name="intro" class="form-control @error('intro') is-invalid @enderror" placeholder="Sanoat o'quv" value="{{ old('intro') }}">
                    </div>
                    @error('intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Asosiy tekst - O'zbekcha</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="10 yillik tajriba" value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>

{{--                <span class="ttm-textcolor-skincolor"> 10  </span> Yillik Tajriba  --}}
            </form>

        </div>
    </div>

@endsection
