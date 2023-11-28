<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['name','description', 'detail', 'quantity' , 'price', 'images' , 'category_id'];
    public function category(){
        return $this->belongsTo(Category::class);
    }
    protected $casts = [
        'images' => 'array',
    ];
}
