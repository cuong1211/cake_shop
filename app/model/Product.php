<?php

namespace App\model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';

    protected $fillable = [
      'name',
      'description',
      'image',
      'price'
    ];
}
