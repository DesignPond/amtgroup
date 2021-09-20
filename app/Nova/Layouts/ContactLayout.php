<?php
namespace App\Nova\Layouts;

use Laravel\Nova\Fields\Text;
use Alfonsobries\NovaTrumbowyg\NovaTrumbowyg;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Flexible;
use YesWeDev\Nova\Translatable\Translatable;
use Laravel\Nova\Fields\Trix;

class ContactLayout extends Layout
{

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'contact';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Bloc contact';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Trix::make('Adresse', 'adresse'),
            Text::make('Email','email'),
            Text::make('Téléphone', 'phone'),
        ];
    }
}
