<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        \App::setLocale(\Session::get('locale'));

        $homepage   = \App\Page::where('visible','=',1)->where('slug', '=', '/')->first();
        $actualites = \App\Actualite::orderBy('created_at','DESC')->take(4)->get();

        return view('index')->with(['page' => $homepage, 'actualites' => $actualites]);
    }

    public function blog($id)
    {
        \App::setLocale(\Session::get('locale'));

        $page = \App\Page::where('slug','=','news')->first();

        if(!$page){
            return redirect('/');
        }

        $actualite = \App\Actualite::find($id);

        return view('blog')->with(['actualite' => $actualite, 'page' => $page]);
    }
}
