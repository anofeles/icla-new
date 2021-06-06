<?php


namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class locale extends Model
{
    protected $table = 'locales';
    protected $fillable = ['uuid','url','title','sort'];

}
