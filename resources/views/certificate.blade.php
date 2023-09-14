@extends('layouts.web')

@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <h2>@lang('main.certificate_check')</h2>
                    <x-breadcrumbs>
                        <span> &raquo; @lang('main.certificate_check')</span>
                    </x-breadcrumbs>
                </div>
            </div>
        </div>
    </div>

    <section id="blog-main" class="blog-main archive single section">
        <div class="container">
            <div class="row">
                <div class="blog-main">

                    @if($attempted)
                        <div class="col-md-11" style="margin-top: 30px">
                            @empty($certificate)
                                <div class="alert alert-danger alert-dismissible">
                                    <div style="display: flex; gap: 20px;">
                                        <div>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="icon icon alert-icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <path d="M5 12l5 5l10 -10"></path>
                                            </svg>
                                        </div>
                                        <div>
                                            @lang('main.certificate_not_found', ['code' => $code])
                                        </div>
                                    </div>
                                    <a class="btn-close" data-bs-dismiss="alert" aria-label="close"></a>
                                </div>
                            @else
                                <div class="contact-us" style="width: 100%; padding: 10px;">
                                    <table class="table" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                        <tr>
                                            <th>№ / Dates</th>
                                            <th>Status</th>
                                            <th>Address/Accred.</th>
                                            <th>Scope of W./Standard</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>
                                                №: {{ $certificate->number }} <br>
                                                Issued: {{$certificate->issue_date?->format('Y-m-d')}} <br>
                                                Expires: {{$certificate->expiry_date?->format('Y-m-d')}}
                                            </td>
                                            <td>{{$certificate->getStatus()}}</td>
                                            <td>
                                                Address: {{$certificate->address}}<br>
                                                Accreditation: {{$certificate->accreditation}}
                                            </td>
                                            <td>
                                                Scope of Work: {{$certificate->address}}<br>
                                                Standard: {{$certificate->accreditation}}
                                            </td>
                                        </tbody>
                                    </table>
                                </div>
                            @endempty
                        </div>
                    @endif

                    <div class="col-md-12 col-sm-12 col-xs-12">
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
                                <form method="POST" id="sendmail" action="{{route('web.certificate')}}">
                                    @csrf
                                    <input type="hidden" name="attempted" value="1">
                                    <div id="contact-us" class="contact-us">
                                        <div class="col-md-12">
                                            <h4>@lang('main.certificate_check')</h4>
                                            <br>
                                            <div class="quote">
                                                <b>@lang('main.certificate_check_header')</b><br>
                                                @lang('main.certificate_check_info') <br>
                                            </div>
                                            <hr>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="name">@lang('main.certificate_number')</label>
                                                <input type="text" name="certificate" placeholder="@lang('main.certificate_number')" required="required" value="{{$code ?? old('certificate')}}">
                                                @error('certificate') <p class="text-danger" style="padding: 0 10px">{{$message}}</p> @enderror
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group button">
                                                <button type="submit" class="btn primary">@lang('main.btn_send')</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
