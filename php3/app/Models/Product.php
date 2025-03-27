<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{

    protected $attributes = ['price' => 20, 'category_id'=> 2];
    protected $fillable = ['id','name', 'price', 'category_id'];

    use HasFactory;
    use SoftDeletes;
    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }


}
