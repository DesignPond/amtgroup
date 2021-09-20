<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Ofcold\NovaSortable\SortableTrait;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Competence extends Model implements TranslatableContract
{
    use SortableTrait,Translatable;

    public $translationModel = '\App\CompetenceTranslation';
    public $translatedAttributes = ['title','content'];

    protected $table = 'competences';
    protected $fillable = ['icon','visible'];
    protected $dates = ['deleted_at'];
}
