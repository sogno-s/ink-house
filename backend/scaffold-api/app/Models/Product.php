<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'author', 'description', 'price', 'linkToLink', 'category_id'];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
