<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trademark extends Model
{
    use HasFactory;

    protected $table = 'trademarks';

    protected $fillable = [
        'name',
        'slug',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
