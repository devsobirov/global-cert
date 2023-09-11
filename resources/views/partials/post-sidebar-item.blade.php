<div class="single-post">
    <div class="post-img"><img src="{{asset($post->image)}}" alt="{{$post->title}}"/></div>
    <div class="post-info">
        <p>{{$post->created_at?->format('d-M-Y H:i')}}</p>
        <h4><a href="{{route('web.blog.show', $post->id)}}">{{$post->title}}</a></h4>
    </div>
</div>
