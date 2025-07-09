<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = "khach_hangs";
    protected $primaryKey = "khach_hang_id";
    protected $fillable = ["khach_hang_id", "ten_khach_hang", "email", "sdt", "level", "diem"];
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Order::class, "khach_hang_id");
    }
}
