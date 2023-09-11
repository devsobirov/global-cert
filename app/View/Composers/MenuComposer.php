<?php


namespace App\View\Composers;


use App\Models\Menu;
use Illuminate\View\View;

class MenuComposer
{
    public $menu;

    public function __construct()
    {
        $this->menu = Menu::whereNull('parent_id')->with('subMenus')->orderBy('order')->get();
    }

    public function compose(View $view)
    {
        $view->with('menu', $this->menu);
    }
}
