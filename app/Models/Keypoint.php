<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keypoint extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'keypoint',
        'about_id', // Foreign key ke tabel 'abouts'
    ];

    // Relasi kebalikannya (opsional tapi bagus)
    public function about()
    {
        return $this->belongsTo(About::class);
    }
}