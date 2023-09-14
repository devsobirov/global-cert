<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="logo">
            <a href=""><img src="{{asset($settings->logo ?? 'assets/images/logo.png')}}" alt="logo" style="max-height: 85px; display: inline-block"></a>
        </div>
        <div class="mobile-nav"></div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="header-widget">
            <div class="single-widget">
                <i class="fa fa-clock-o"></i>
                <h4>@lang('main.header_hours')</h4>
                <p>{{$settings->working_hours}}</p>
            </div>
            <div class="single-widget">
                <i class="fa fa-envelope"></i>
                <h4>@lang('main.header_email')</h4>
                <p><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
            </div>
            <div class="single-widget">
                <i class="fa fa-phone"></i>
                <h4>@lang('main.header_phone')</h4>
                <p><a href="tel:{{$settings->phone}}">{{$settings->phone}}</a></p>
            </div>
        </div>
    </div>
</div>
