<?php
namespace App\Nova\Layouts;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Flexible;
use OptimistDigital\MultiselectField\Multiselect;

class TeamLayout extends Layout
{

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'team';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Affiche les personnes du team';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        $teams = \App\Team::all()->pluck('name','id')->all();

        return [
            Multiselect::make('Équipe', 'team')
                ->rules('required')
                ->options($teams)
                ->placeholder('Choix')
                ->max(5)
        ];
    }
}
