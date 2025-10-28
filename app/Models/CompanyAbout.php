<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; 
use App\Models\CompanyKeypoint;

class CompanyAbout extends Model
{
    protected $table = 'company_abouts'; 

    protected $fillable = [
        'name',
        'thumbnail',
        'type'
    ];

    public function keypoints()
    {
        return $this->hasMany(CompanyKeypoint::class, 'company_about_id');
    }
}