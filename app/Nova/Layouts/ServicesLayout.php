<?php
namespace App\Nova\Layouts;

use OptimistDigital\MultiselectField\Multiselect;
use Whitecube\NovaFlexibleContent\Layouts\Layout;

class ServicesLayout extends Layout
{

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'services';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Services';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        \App::setLocale('fr');

        $services = \App\Service::all()->mapWithKeys(function ($item, $key) {
            return [$item->id => $item->title];
        })->toArray();

        return [
            Multiselect::make('Services', 'service')
                ->rules('required')
                ->options($services)
                ->placeholder('Choix')
        ];
    }
}
