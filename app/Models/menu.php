<?php


namespace App\Models;


use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class menu extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'menus';
    public $translatedAttributes = ['locale', 'title'];
    protected $fillable = ['uuid','type','active','arqive','sort','menu_id'];

}
