<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TeamTranslation extends Model
{
    protected $table = 'team_translations';

    public $timestamps = false;
    protected $fillable = ['position','biography'];
}
