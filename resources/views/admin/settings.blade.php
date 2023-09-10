@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Sozlamalar
                    </div>
                    <h2 class="page-title">
                        Umumiy ma'lumotlar
                    </h2>
                </div>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">
            @php /** @var \App\Models\Setting $item */ @endphp

            @foreach($item->translatable as $field)
                <form action="{{route('settings.store')}}" class="card mb-3" method="POST">
                    @csrf
                    @foreach(\LaravelLocalization::getLocalesOrder() as $locale => $data)
                        <div class="card-body">
                            <div class="mb-3">
                                <label class="form-label required">{{$field}} - {{$data['native']}}</label>
                                <input type="text" name="{{$field}}[{{$locale}}]" class="form-control @error($field.'.'.$locale) is-invalid @enderror" placeholder="..." value="{{ $item->getTranslation($field, $locale, false) }}">
                            </div>

                        </div>
                    @endforeach
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Saqlash</button>
                    </div>
                </form>
            @endforeach

            <form action="{{route('settings.store')}}" class="card mb-3" method="POST" enctype="multipart/form-data">
                <div class="card-header">
                    <h3>Media ma'lumotlar</h3>
                </div>
                <div class="card-body">
                    @foreach($item->files as $field)
                        @php $img = $item->$field ? asset($item->$field) : null; @endphp
                        @csrf
                        <div class="mb-3">
                            <div class="row">
                                <div class="col-md-{{$img ? 9 : 12}}">
                                    <div class="mb-3">
                                        <div class="form-label">{{$field}}</div>
                                        <input type="file" name="{{$field}}" class="form-control @error($field) is-invalid @enderror" accept="image/*">
                                        @error($field)
                                        <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                @if($img)
                                    <div class="col-md-3 px-2">
                                        <img src="{{$img}}" class="p-1 rounded border mt-4 d-block" style="max-width: 100%" alt="{{$field}}">
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

            <form action="{{route('settings.store')}}" class="card mb-3" method="POST">
                @csrf
                <div class="card-header">
                    <h3>Kontakt ma'lumotlari</h3>
                </div>
                <div class="card-body">
                    @foreach($item->contacts as $field)
                        <div class="mb-3">
                            <label class="form-label required">{{$field}}</label>
                            <input type="text" name="$field" class="form-control @error($field) is-invalid @enderror" placeholder="..." value="{{ $item->$field ?? old($field) }}">
                        </div>
                        @error($field)
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    @endforeach
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

            <form action="{{route('settings.store')}}" class="card mb-3" method="POST">
                @csrf
                <div class="card-header">
                    <h3>Skriptlar</h3>
                </div>
                <div class="card-body">
                    @foreach($item->scripts as $field)
                        <div class="mb-3">
                            <label class="form-label required">{{$field}} </label>
                            <textarea type="text" name="{{$field}}" class="form-control @error($field) is-invalid @enderror" placeholder="...">{!! $item->$field ?? old($field) !!}</textarea>
                        </div>
                        @error($field)
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    @endforeach
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

        </div>
    </div>

@endsection
