<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;

class Actualite extends Model implements HasMedia
{
    use HasFactory, InteractsWithMedia;

    protected $fillable = ['id','title','content','image','author'];

    public function registerMediaConversions(Media $media = null) : void
    {
        $this->addMediaConversion('thumb')->width(340)->height(250);
    }

    public function registerMediaCollections() : void
    {
        $this->addMediaCollection('main')->singleFile();
    }
}
