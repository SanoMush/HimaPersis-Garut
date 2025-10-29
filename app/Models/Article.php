<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Article extends Model
{
    use HasFactory;
    protected $fillable = [
    'title',
        'thumbnail',
        'content',
        'slug',
        'user_id',
        'author_name',
        'pdf_path',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}