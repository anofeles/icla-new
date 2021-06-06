<?php


namespace App\Models;



use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model implements TranslatableContract
{
    use Translatable;

    protected $table = 'posts';
    public $translatedAttributes = ['title', 'locale', 'desc','text','img'];
    protected $fillable = ['uuid','type','active','arqive','sort','mtav'];
}
