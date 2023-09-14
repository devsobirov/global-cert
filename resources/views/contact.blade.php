@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>@lang('main.contact')</h2>
                    <x-breadcrumbs>
                        <span> &raquo; @lang('main.contact')</span>
                    </x-breadcrumbs>
                </div>
            </div>
        </div>
    </div>

    <section id="blog-main" class="blog-main archive single section">
        <div class="container">
            <div class="row">
                <div class="blog-main">
                    <div class="col-md-8 col-sm-12 col-xs-12">
                        <div class="row">
                            @if ($message = Session::get('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <div style="display: flex; gap: 20px;">
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
                            <div id='dle-content'>
                                <form method="POST" id="sendmail" action="{{route('web.contact-save')}}">
                                    @csrf
                                    <div id="contact-us" class="contact-us">
                                        <div class="col-md-12">
                                            <h4>@lang('main.contact')</h4>
                                            <br>
                                            <div class="quote">
                                                <b>@lang('main.contact_header')</b><br>@lang('main.contact_info')
                                            </div>
                                            <hr>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="name">@lang('main.contact_name'):</label>
                                                <input type="text" name="name" placeholder="@lang('main.contact_name')" required="required" value="{{old('name')}}">
                                                @error('name') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="subject">@lang('main.contact_company'):</label>
                                                <input type="text" name="subject" placeholder="@lang('main.contact_company')" required="required" value="{{old('subject')}}">
                                                @error('subject') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="email">@lang('main.contact_phone')</label>
                                                <input type="text" name="email" placeholder="example@mal.com, +555-111-22-33" required="required" value="{{old('email')}}">
                                                @error('email') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="message">@lang('main.contact_message'):</label>
                                                <textarea name="content" rows="7" placeholder="@lang('main.contact_message')">{{old('content')}}</textarea>
                                                @error('content') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary">@lang('main.btn_send_msg')</button>
                                            </div>
                                        </div>
                                    </div>
                                </form></div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12 sticky-area">
                        @include('partials.sidebar')
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
