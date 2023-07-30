<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OderItem extends Model
{
    use HasFactory;
    protected $filltable = ['quantity','product_id','oder_id'];
    public function oder(){
        return $this->belongTo(Oder::class);
    }
    public function product(){
        return $this->belongTo(Product::class);
    }
}
