<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends \Stephenjude\FilamentBlog\Models\Post
{
    use HasFactory;

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
