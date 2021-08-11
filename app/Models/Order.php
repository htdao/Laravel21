<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\DocBlock\Tags\Reference\Url;

class Order extends Model
{
    use HasFactory;

    static $revenue;

    protected $table = 'orders';

    protected $fillable = [
        'user_id',
        'customer_name',
        'address',
        'phone',
        'total_price',
        'status',
    ];

    const WAITTING = 0;
    const PROGRESSING = 1;
    const SHIPPING = 2;
    const SHIPPED = 3;
    const SUCCESS = 5;
    const CANCELLATION = 4;


    public static $order_status = [
        self::WAITTING => 'Chờ xử lý',
        self::PROGRESSING => 'Yêu cầu huỷ',
        self::SHIPPING => 'Chờ giao hàng',
        self::SHIPPED => 'Đang giao',
        self::SUCCESS => 'Đã giao hàng',
        self::CANCELLATION => 'Đã huỷ',


    ];

    public function getOrderStatusAttribute(){
        if ($this->status == 0){
            return 'Chờ xử lý';
        } elseif ($this->status == 1){
            return 'Yêu cầu huỷ';
        } elseif ($this->status == 2){
            return 'Chờ giao hàng';
        } elseif($this->status == 5){
            return 'Giao hàng thành công';
        } elseif($this->status == 4){
            return 'Huỷ thành công';
        } elseif ($this->status == 3){
            return 'Đang giao';
        }

    }

    public function getButtonTextAttribute($value){
        if($this->status == 0){
            return "Xác nhận";
        }elseif ($this->status == 1){
            return 'Huỷ';
        }elseif ($this->status == 2){
            return 'Giao hàng';
        }elseif ($this->status == 5){
            return 'Hoàn thành';
        }elseif($this->status == 4){
            return 'Đã huỷ';
        }elseif ($this->status == 3){
            return 'Đã giao';
        }
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quality');
    }

    public function revenue(){
        return $this->belongsTo(Revenue::class);
    }
}
