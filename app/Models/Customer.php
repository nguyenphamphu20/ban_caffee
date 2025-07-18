<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Customer extends Authenticatable
{
    protected $table = "khach_hangs";
    protected $primaryKey = "khach_hang_id";
    protected $fillable = ["khach_hang_id", "ten_khach_hang", "email", "password", "remember_token", "dia_chi", "sdt", "level", "diem", "hinh"];

    public function orders()
    {
        return $this->hasMany(Order::class, "khach_hang_id");
    }

    public function banks()
    {
        return $this->hasMany(BankCard::class, "khach_hang_id");
    }
}