<?php


namespace App\Repositories;


use App\Core\Database\Repository;
use App\Models\menu;

class MenuRepositori extends Repository
{
    public function model()
    {
     return menu::class;   // TODO: Implement model() method.
    }

}
