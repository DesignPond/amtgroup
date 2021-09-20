<?php namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Spatie\Menu\Link;

class PageComposer
{
    public function __construct(){}

    public function compose(View $view)
    {
        \App::setLocale(\Session::get('locale'));

        $pages    = \App\Page::where('visible','=',1)->orderBy('sort_order')->get();
        $homepage = \App\Page::where('slug','=','header')->first();

        $menu = $pages->map(function ($page) {
            return [
                'slug' => $page->slug,
                'name' => $page->translate(session()->get('locale'))->menu
            ];
        });

        $view->with('links', $menu);
        $view->with('homepage',$homepage);

    }
}
