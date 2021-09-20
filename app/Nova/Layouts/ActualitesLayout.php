<?php
namespace App\Nova\Layouts;

use OptimistDigital\MultiselectField\Multiselect;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Ctessier\NovaAdvancedImageField\AdvancedImage;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Laravel\Nova\Fields\Boolean;

class ActualitesLayout extends Layout implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'actualites';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Actualités';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        \App::setLocale('fr');

        return [
            Boolean::make('Afficher')
        ];
    }
}
