<div class="single-blog single-slider">
    <div class="blog-post">
        <div class="blog-head">
            <img src="{{asset($post->image)}}" alt="{{$post->title}}">
            <a class="link" href="{{route('web.blog.show', $post->id)}}"><i class="fa fa-paper-plane"></i></a>
        </div>
        <div class="blog-info">
            <h2><a href="{{route('web.blog.show', $post->id)}}">{{$post->title}}</a></h2>
            <div class="meta">
                <span><i class="fa fa-calendar-o"></i>{{$post->created_at?->format('d-M-Y')}}</span>
                <span><i class="fa fa-eye"></i>{{$post->views}}</span>
            </div>
        </div>
    </div>
</div>
