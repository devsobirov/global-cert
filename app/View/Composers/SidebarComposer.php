<?php


namespace App\View\Composers;


use App\Models\Post;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;

class SidebarComposer
{
    public Collection $posts;

    public function __construct()
    {
        $this->posts = Post::getLatestPosts(8, $this->getCurrentPostId());
    }

    public function compose(View $view)
    {
        $view->with('latestPosts', $this->posts);
    }

    private function getCurrentPostId()
    {
        return request()->route()->parameter('post')?->id;
    }
}
