<?php
namespace App\Nova\Layouts;

use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Markdown;
use Manogi\Tiptap\Tiptap;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Flexible;
use Inspheric\Fields\Url;
use Alfonsobries\NovaTrumbowyg\NovaTrumbowyg;

class HeaderLayout extends Layout
{

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'header';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Header avec image';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        return [
            Text::make('Sur-titre','first'),
            Text::make('Sous-titre','third'),
            Text::make('Titre','second'),
        ];
    }
}
