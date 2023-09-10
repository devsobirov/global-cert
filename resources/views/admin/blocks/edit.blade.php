@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Bloklar
                    </div>
                    <h2 class="page-title">
                        Tahrirlash - {{ucfirst($item->type)}} bloklari, {{$item->title}}
                    </h2>
                </div>
                <a href="{{route('blocks.show', ['block' => $item->type])}}" class="btn btn-primary">Barcha {{ucfirst($item->type)}} bloklari</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('blocks.update', $item->id) }}" method="POST" class="card mb-3" enctype="multipart/form-data" autocomplete="off">
                @csrf @method('PATCH')
                <input type="hidden" name="general" value="general">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-10">
                            <div class="mb-3">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="text" class="form-control" name="icon" id="icon" placeholder="fa fa-user" value="{{$item->icon}}">
                                @error('image')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <div class="form-label">Tartib raqami</div>
                                <input type="number" name="order" placeholder="3" class="form-control @error('order') is-invalid @enderror" value="{{ $item->order }}">
                                @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" value="1" @if($item->status ?? old('status')) checked @endif name="status">
                                    <span class="form-check-label">Status -aktiv</span>
                                </label>
                                @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label required">URL (agar bo'lsa, "Sahifa" urli)</label>
                                <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="about-us" value="{{ $item->url ?? old('url') }}">
                            </div>
                            @error('url')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror

                        </div>
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

            @foreach(\LaravelLocalization::getLocalesOrder() as $locale => $data)
            <form action="{{ route('blocks.update', $item->id) }}" method="POST" class="card mb-3" autocomplete="off">
                @csrf @method('PATCH')
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Asosiy tekst - {{$data['native']}}</label>
                        <input type="text" name="lang[{{$locale}}][title]" class="form-control @error('lang.'.$locale.'.title') is-invalid @enderror" placeholder="10 yillik tajriba" value="{{ $item->getTranslation('title', $locale, false) }}">
                    </div>
                    @error('lang.'.$locale.'.title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label required">description (kichik tekst, ixtiyoriy) - {{$data['native']}}</label>
                        <textarea name="lang[{{$locale}}][description]" class="form-control @error('lang.'.$locale.'.description') is-invalid @enderror" placeholder="description">{{ $item->getTranslation('description', $locale, false) }}</textarea>
                    </div>
                    @error('lang.'.$locale.'.description')
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

