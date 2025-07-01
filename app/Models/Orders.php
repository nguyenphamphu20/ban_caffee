<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = "don_hangs";
    protected $fillable = ["don_hang_id", "khach_hang_id", "thoi_gian", "tong_tien", "trang_thai", "phuong_thuc_thanh_toan", "ghi_chu"];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customers::class, "khach_hang_id");
    }

    public function ordersDetails()
    {
        return $this->hasMany(OrdersDetails::class, "don_hang_id");
    }
}
