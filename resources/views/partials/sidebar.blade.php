<aside class="blog-sidebar">

    <div class="single-sidebar subscribe post-tab">
        <h2><span>Latest news</span></h2>
        <div class="single-widget subscribe">
            @foreach($latestPosts as $post)
                @include('partials.post-sidebar-item', compact('post'))
            @endforeach
        </div>
    </div>

</aside>
