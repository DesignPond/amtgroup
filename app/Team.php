<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Ofcold\NovaSortable\SortableTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Team extends Model implements HasMedia, TranslatableContract
{
    use InteractsWithMedia, SortableTrait, Translatable;

    public $translationModel = '\App\TeamTranslation';

    public $translatedAttributes = ['position','biography','publications','interventions'];

    protected $table = 'teams';
    protected $fillable = ['name', 'email', 'visible', 'sort_order'];
    protected $dates = ['deleted_at'];

    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')->width(340)->height(250);
    }

    public function registerMediaCollections() : void
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
