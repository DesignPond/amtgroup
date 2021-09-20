<?php

namespace App\Providers;

use Laravel\Nova\Nova;
use Laravel\Nova\Cards\Help;
use Illuminate\Support\Facades\Gate;
use Laravel\Nova\NovaApplicationServiceProvider;
use Silvanite\NovaToolPermissions\NovaToolPermissions;
use Joedixon\NovaTranslation\NovaTranslation;

use Jubeki\Nova\Cards\Linkable\Linkable;
use Jubeki\Nova\Cards\Linkable\LinkableAway;
use Jubeki\Nova\Cards\Linkable\LinkableRouter;

class NovaServiceProvider extends NovaApplicationServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }

    /**
     * Register the Nova routes.
     *
     * @return void
     */
    protected function routes()
    {
        Nova::routes()
                ->withAuthenticationRoutes()
                ->withPasswordResetRoutes()
                ->register();

        Nova::style('admin', public_path('css/admin.css'));
    }

    /**
     * Register the Nova gate.
     *
     * This gate determines who can access Nova in non-local environments.
     *
     * @return void
     */
    protected function gate()
    {
        //Gate::define('viewNova', function ($user) {return in_array($user->email, []);});
    }

    /**
     * Get the cards that should be displayed on the default Nova dashboard.
     *
     * @return array
     */
    protected function cards()
    {
        return [
            //new Help,
            (new Linkable)
                ->title('Pages')
                ->url("/resources/pages"),
            (new Linkable)
                ->title('Services')
                ->url("/resources/services"),
            (new Linkable)
                ->title('Compétences')
                ->url("/resources/competences"),
        ];
    }

    /**
     * Get the extra dashboards that should be displayed on the Nova dashboard.
     *
     * @return array
     */
    protected function dashboards()
    {
        return [];
    }

    /**
     * Get the tools that should be listed in the Nova sidebar.
     *
     * @return array
     */
    public function tools()
    {
        return [
            new NovaToolPermissions(),
            new NovaTranslation,
        ];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
