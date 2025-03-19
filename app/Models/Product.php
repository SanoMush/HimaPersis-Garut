<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'about',
        'tagline',
        'thumbnail',
        'name',
    ];

    public function keypoints(){
        return $this->hasMany(CompanyKeyPoint::class);
    }
}
