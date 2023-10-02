<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;
    protected $table='pages';
    protected $fillable=['name','url'];

    public function SubPage(){  
        return $this->hasMany(SubPage::class,'page_id','id');
    }
}

