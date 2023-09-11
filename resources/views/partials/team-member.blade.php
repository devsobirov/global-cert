<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="single-team one default">
        <div class="t-head">
            <img src="{{asset($member->image)}}" alt="{{$member->name}}">
            <div class="t-hover">
                <ul class="t-social">
                    <li><a href="tel:{{$member->phone}}"><i class="fa fa-phone"></i>{{$member->phone}}</a></li>
                    <li><a href="mailto:{{$member->email}}"><i class="fa fa-envelope"></i>{{$member->email}}</a></li>
                </ul>
            </div>
        </div>
        <div class="t-bottom">
            <h2 class="t-name">{{$member->name}}</h2>
            <p class="what">{{$member->position}}</p>
        </div>
    </div>
</div>
