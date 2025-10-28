<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    // Ini adalah kolom yang boleh diisi dari form admin
    protected $fillable = [
        'name',
        'thumbnail',
        'type',
    ];

    // Ini adalah relasi ke keypoints (dilihat dari form edit Anda)
    public function keypoints()
    {
        // Model 'About' memiliki banyak 'Keypoint'
        return $this->hasMany(Keypoint::class);
    }
}