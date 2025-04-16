<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    //

    protected $fillable = [
        'title',
        'content',
        'author_id',
        'category_id',
        'published_at',
    ];
}
