<?php
namespace App\Nova\Layouts;

use OptimistDigital\MultiselectField\Multiselect;
use Whitecube\NovaFlexibleContent\Layouts\Layout;
use Whitecube\NovaFlexibleContent\Concerns\HasMediaLibrary;
use Ctessier\NovaAdvancedImageField\AdvancedImage;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class CompetencesLayout extends Layout implements HasMedia
{
    use InteractsWithMedia;

    /**
     * The layout's unique identifier
     *
     * @var string
     */
    protected $name = 'competences';

    /**
     * The displayed title
     *
     * @var string
     */
    protected $title = 'Compétences';

    /**
     * Get the fields displayed by the layout.
     *
     * @return array
     */
    public function fields()
    {
        \App::setLocale('fr');

        $comptetences = \App\Competence::all()->mapWithKeys(function ($item, $key) {
            return [$item->id => $item->title];
        })->toArray();

        return [
            Multiselect::make('Compétences', 'competence')
                ->rules('required')
                ->options($comptetences)
                ->placeholder('Choix')
        ];
    }
}
