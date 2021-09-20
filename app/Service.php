<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ofcold\NovaSortable\SortableTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Service extends Model implements TranslatableContract
{
    use SortableTrait,Translatable;

    public $translationModel = '\App\ServiceTranslation';
    public $translatedAttributes = ['title','content'];

    protected $table = 'services';
    protected $fillable = ['icon','visible'];
    protected $dates = ['deleted_at'];
}
