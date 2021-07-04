<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone',
        'address',
        'role',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    protected $table = 'users';

    public function getRoleTextAttribute(){
        if ($this->role == 0){
            return 'Quản lý';
        } elseif ($this->role == 1){
            return 'Nhân viên';
        } else {
            return 'Khách hàng';
        }
    }

    const ADMIN = 0;
    const USER1 = 1;
    const USER2 = 2;

    public static $role_text = [
        self::ADMIN => 'Quản lý',
        self::USER1 => 'Nhân viên',
        self::USER2 => 'Khách hàng',
    ];

    public function products(){
        return $this->hasMany(Product::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }
}
