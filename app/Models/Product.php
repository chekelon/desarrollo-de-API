<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    protected $fillable = [
        'name','caducidad', 
    ];

    public function comments()
    {
        return $this->hasMany('App\Models\Comment');
    }
}