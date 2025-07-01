<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = "khach_hangs";
    protected $fillable = ["khach_hang_id", "ten_khach_hang", "email", "sdt", "level", "diem"];
    public $timestamps = false;

    public function orders()
    {
        return $this->hasMany(Orders::class, "khach_hang_id");
    }
}
