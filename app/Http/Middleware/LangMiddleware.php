<?php

namespace App\Http\Middleware;

use Closure;

class LangMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(!\Session::has('locale') && isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])){
	        
            $supportedLangs = array('fr-CH','fr-FR','de-CH','de-DE');

            $languages = explode(',',$_SERVER['HTTP_ACCEPT_LANGUAGE']);

            foreach($languages as $lang) {
                // Set the page locale to the first supported language found
                if(in_array($lang, $supportedLangs))
                {
                    $lang = explode('-',$lang);
                    $lang = isset($lang[0]) ? $lang[0] : 'fr';
                    \App::setLocale($lang);
                    session(['locale' => $lang]);
                    break;
                }
                else{
                   \App::setLocale('fr');
                }
            }
        }
        else{
            \App::setLocale(\Session::get('locale'));
        }

        return $next($request);
    }
}
