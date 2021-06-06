<?php


namespace App\Repositories;


use App\Core\Database\Repository;
use App\Models\locale;

class LocaleRepositori extends Repository
{

    public function model()
    {
     return locale::class;   // TODO: Implement model() method.
    }
}
