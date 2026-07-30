<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class phone extends Model
{
    protected $fillable = [
        'name',
        'price',
        'count',
        'model',
        'category_id'
    ];
    
      public function category()
    {
        return $this->belongsTo(Category::class);
    }
}