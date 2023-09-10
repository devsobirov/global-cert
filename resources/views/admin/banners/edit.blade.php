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
                        Tahrirlash - #{!! $item->id  !!}
                    </h2>
                </div>
                <a href="{{route('banners.index')}}" class="btn btn-primary">Barcha bannerlar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('banners.update', $item->id) }}" method="POST" class="card mb-3" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <input type="hidden" name="general" value="general">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <div class="form-label">Banner uchun yangi rasm tanlash</div>
                                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" accept="image/*">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-label">Navbat</div>
                                <input type="number" name="order" placeholder="3" class="form-control @error('order') is-invalid @enderror" value="{{ $item->order }}">
                                @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="1" @if($item->is_external_link ?? old('is_external_link')) checked @endif name="is_external_link">
                                    <span class="form-check-label">Tashqi sayt uchun havola (Agar havola bo'lsa va u boshqa saytga olib borsa)</span>
                                </label>
                                @error('is_external_link')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">Havola uchun URL (agar havola bo'lsa) - agar ichki sahifa bolsa "Sahifa" urli, agar tashqi bolsa to'liq havola</label>
                                <input type="text" name="btn_link" class="form-control @error('btn_link') is-invalid @enderror" placeholder="about-us" value="{{ $item->btn_link ?? old('btn_link') }}">
                            </div>
                            @error('btn_link')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

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
            <form action="{{ route('banners.update', $item->id) }}" method="POST" class="card mb-3" autocomplete="off">
                @csrf @method('PATCH')
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Intro (kichik tekst, ixtiyoriy) - {{$data['native']}}</label>
                        <input type="text" name="lang[{{$locale}}][intro]" class="form-control @error('lang.'.$locale.'.intro') is-invalid @enderror" placeholder="Intro" value="{{ $item->getTranslation('intro', $locale, false) }}">
                    </div>
                    @error('lang.'.$locale.'.intro')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Asosiy tekst - {{$data['native']}}</label>
                        <input type="text" name="lang[{{$locale}}][title]" class="form-control @error('lang.'.$locale.'.title') is-invalid @enderror" placeholder="10 yillik tajriba" value="{{ $item->getTranslation('title', $locale, false) }}">
                    </div>
                    @error('lang.'.$locale.'.title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">Havola uchun tekst (agar bo'lsa) - {{$data['native']}}</label>
                        <input type="text" name="lang[{{$locale}}][btn_label]" class="form-control @error('lang.'.$locale.'btn_label') is-invalid @enderror" placeholder="Batafsil" value="{{ $item->getTranslation('btn_label', $locale, false) }}">
                    </div>
                    @error('lang.'.$locale.'btn_label')
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

