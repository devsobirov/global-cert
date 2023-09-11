<div class="col-md-4 col-sm-6 col-xs-12">
    <div class="single-services">
        <div class="icon"><i class="{!! $service->icon !!}"></i></div>
        <div class="icon two"><i class="{!! $service->icon !!}"></i></div>
        <h2><a href="{{$service->getUrl()}}">{!! $service->title !!}</a></h2>
        <p>{!! $service->description !!}</p>
    </div>
</div>
