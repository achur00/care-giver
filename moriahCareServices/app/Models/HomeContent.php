<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    use HasFactory;
    protected $table='home_contents';
    protected $fillable=['title','content','cta','cta_url','video_mp4','video_ogv','video_webm'];
}
