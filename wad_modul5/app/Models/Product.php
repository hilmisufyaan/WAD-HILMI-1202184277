<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function order() 
    {
        return $this->hasMany('App\Models\Order');
    }

    protected $fillable = [
        'name', 'price', 'description', 'stock', 'img_path'
    ];

    public $timestamps = false;
}