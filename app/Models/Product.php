<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $filltable = ['name','description','price','quantity','category_id'];
    public function category(){
        return $this->belongTo(Category::class);
    }
}
