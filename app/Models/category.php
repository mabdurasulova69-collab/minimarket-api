<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
        protected $fillable = [
        'name',
        'status',
    ];

    public function phone()
    {
        return $this->hasMany(Phone::class);
    }
}
