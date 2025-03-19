<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyAbout extends Model
{
    
    protected $fillable = [
        'name',
        'thumbnail',
        'type'
    ];

    public function keypoints(){
        return $this->hasMany(CompanyKeyPoint::class);
    }
}
