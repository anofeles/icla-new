<?php


namespace App\Repositories;


use App\Core\Database\Repository;
use App\Models\Post;

class PostRepositori extends Repository
{
    public function model()
    {
     return Post::class;   // TODO: Implement model() method.
    }

}
