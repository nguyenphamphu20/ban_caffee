<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = "don_hangs";
    protected $primaryKey = "don_hang_id";
    protected $fillable = ["don_hang_id", "khach_hang_id", "tong_tien", "trang_thai", "phuong_thuc_thanh_toan", "ghi_chu"];

    public function customer()
    {
        return $this->belongsTo(Customer::class, "khach_hang_id");
    }

    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class, "don_hang_id");
    }
}
