<div class="single-slider" style="background-image:url({{asset($slide->image)}})">
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-md-offset-5 col-sm-12 col-xs-12">
                <div class="slide-text right">
                    <div class="sltitle"><span class="short">{!! $slide->intro !!}</div>
                    <p>{!! $slide->descripiton !!}</p>
                    <div class="slide-btn">
                        @if($slide->btn_label)
                            <a href="{{$slide->getUrl()}}" class="btn primary">{{$slide->btn_label}}</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
