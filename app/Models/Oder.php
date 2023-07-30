<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oder extends Model
{
    use HasFactory;
    protected $filltable = ['name','description','price','status','user_id'];
    public function oderItems(){
        return $this->hasMany(OderItem::class);
    }
    public function user(){
        return $this->belongTo(User::class);
    }
}
