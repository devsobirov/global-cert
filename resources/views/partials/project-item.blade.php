<div class="cbp-item">
    <div class="project-single">
        <div class="project-inner">
            <div class="project-head"><img src="{{asset($project->image)}}" alt="{{$project->name}}"></div>
            <div class="project-bottom">
                <h4><a href="#">{{$project->name}}</a></h4>
            </div>
            <div class="button">
                <a data-fancybox="portfolio" href="{{asset($project->image)}}" class="btn"><i class="fa fa-photo"></i></a>
            </div>
        </div>
    </div>
</div>
