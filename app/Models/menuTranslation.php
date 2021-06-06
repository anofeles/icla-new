<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class menuTranslation extends Model
{
    protected $table = 'menu_translations';
    protected $fillable = ['title', 'locale'];
    public $timestamps = false;

}
