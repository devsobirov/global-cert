@extends('admin.layouts.app')

@section('content')
    <div class="container-xl">
        <!-- Page title -->
        <div class="page-header d-print-none">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col">
                    <!-- Page pre-title -->
                    <div class="page-pretitle">
                        Menu linklari
                    </div>
                    <h2 class="page-title">
                        Yangi link kiritish
                    </h2>
                </div>
                <a href="{{route('menu.index')}}" class="btn btn-primary">Barcha linklar</a>
            </div>
        </div>
    </div>
    <div class="page-body">
        <div class="container-xl">

            <form action="{{ route('menu.store') }}" method="POST" class="card">
                @csrf

                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label required">Sarlavha - O'zbekcha</label>
                        <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" placeholder="10 yillik tajriba" value="{{ old('title') }}">
                    </div>
                    @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <label class="form-label">Agar ona menu bo'lmasa "Sahifa" URL-ini kiriting </label>
                        <input type="text" name="url" class="form-control @error('url') is-invalid @enderror" placeholder="biz-haqimizda" value="{{ old('url') }}">
                    </div>
                    @error('url')
                    <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <div class="mb-3">
                        <div class="form-label">Navbat</div>
                        <input type="number" name="order" placeholder="3" class="form-control @error('order') is-invalid @enderror" value="{{ old('order') }}">
                        @error('order')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <div class="form-label">Ona menuni tanlang (agar ichki menu bo'lsa)</div>
                        <select name="parent_id" id="parent_id" class="form-select">
                            <option value="">Ona menu mavjud emas</option>
                            @foreach($parents as $parent)
                                <option value="{{$parent->id}}">{{$parent->name}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" value="1" @if(old('show_in_footer')) checked @endif name="show_in_footer">
                            <span class="form-check-label">Footer qismida ko'rsatish</span>
                        </label>
                        @error('show_in_footer')
                        <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Saqlash</button>
                </div>
            </form>

        </div>
    </div>

@endsection
