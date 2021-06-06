<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    protected $table = 'post_translations';
    protected $fillable = ['title', 'locale', 'desc','text','img'];
    public $timestamps = false;
}
