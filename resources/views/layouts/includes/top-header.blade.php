<div class="row">
    <div class="col-md-3 col-sm-3 col-xs-12">
        <div class="logo">
            <a href=""><img src="{{asset($settings->logo ?? 'assets/images/logo.png')}}" alt="logo"></a>
        </div>
        <div class="mobile-nav"></div>
    </div>
    <div class="col-md-9 col-sm-9 col-xs-12">
        <div class="header-widget">
            <div class="single-widget">
                <i class="fa fa-clock-o"></i>
                <h4>Иш вақти</h4>
                <p>{{$settings->working_hours}}</p>
            </div>
            <div class="single-widget">
                <i class="fa fa-envelope"></i>
                <h4>Email</h4>
                <p><a href="mailto:{{$settings->email}}">{{$settings->email}}</a></p>
            </div>
            <div class="single-widget">
                <i class="fa fa-phone"></i>
                <h4>Телефон</h4>
                <p><a href="tel:{{$settings->phone}}">{{$settings->phone}}</a></p>
            </div>
        </div>
    </div>
</div>
