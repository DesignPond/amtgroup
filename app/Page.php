<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Ofcold\NovaSortable\SortableTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Page extends Model implements TranslatableContract,HasMedia
{
    public $translationModel = '\App\PageTranslation';

    use InteractsWithMedia,SortableTrait,Translatable;

    public $translatedAttributes = ['title','menu','extract'];

    protected $table = 'pages';
    protected $fillable = ['slug','content','visible','isHome'];
    protected $dates = ['deleted_at'];

    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')->width(240)->height(240);
    }

    public function registerMediaCollections() : void
    {
        $this->addMediaCollection('main')->singleFile();
        $this->addMediaCollection('main_collection');
    }

    public function getHomeAttribute() {
        $content = json_decode($this->content, true);
        return isset($content) && isset($content[0]) ? $content[0]['attributes'] : null;
    }

    public function getTeamsAttribute() {
        $content = json_decode($this->content, true);
        $content = collect($content)->firstWhere('layout','team');

        if(isset($content['attributes']['team'])){
            return \App\Team::whereIn('id',json_decode($content['attributes']['team']))->get();
        }
    }

    public function getServicesAttribute() {
        $content = json_decode($this->content, true);
        $content = collect($content)->firstWhere('layout','services');

        if(isset($content['attributes']['service'])){
            return \App\Service::whereIn('id',json_decode($content['attributes']['service']))->orderBy('sort_order','ASC')->get();
        }

        return null;
    }

    public function getCompetencesAttribute() {
        $content = json_decode($this->content, true);
        $content = isset($content) && isset($content[0]) ? $content[0]['attributes'] : [];

        if(isset($content['competence'])){
            return \App\Competence::whereIn('id',json_decode($content['competence']))->orderBy('sort_order','ASC')->get();
        }

        return null;
    }

    public function getContactAttribute() {
        $content = json_decode($this->content, true);
        return isset($content) && isset($content[0]) ? $content[0]['attributes'] : [];
    }
}
