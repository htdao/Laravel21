<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'name',
        'slug',
        'quantity',
        'origin_price',
        'sale_price',
        'discount_percent',
        'content',
        'user_id',
        'category_id',
        'status',
        'content_more',
        'trademark_id',
        'amount'
    ];

    const STATUS_INIT = -1;
    const STATUS_BUY = 1;
    const STATUS_STOP = 2;

    public static $status_text = [
        self::STATUS_INIT => 'Đang nhập',
        self::STATUS_BUY => 'Đang bán',
        self::STATUS_STOP => 'Ngừng bán'
    ];

    public function getStatusTextAttribute(){
        if ($this->status == -1){
            return 'Đang nhập';
        } elseif ($this->status == 1){
            return 'Đang bán';
        } else{
            return 'Dừng bán';
        }
    }

    public function getContentMoreJsonAttribute(){
        $content_json = json_decode($this->content_more, true);
        return $content_json;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
