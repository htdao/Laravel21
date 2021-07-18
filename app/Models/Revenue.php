<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;

    protected $table = 'revenues';

    protected $fillable = [
        'order_id',
        'total_price',
    ];

    public function order(){
        return $this->hasOne(Order::class);
    }
}
