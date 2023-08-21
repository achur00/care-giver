<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubPage extends Model
{
    use HasFactory;
      // protected $table='moriahcare';
    protected $fillable=['name','url','page_id'];

     public function Page(){
        return $this->belongsTo(Page::class,'id');
    }

    
     public function Service(){
        return $this->hasMany(Service::class,'subpage_id','id');
    }
}
