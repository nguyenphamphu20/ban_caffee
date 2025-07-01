<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrdersDetails extends Model
{
    protected $table = "chi_tiet_don_hangs";
    protected $fillable = ["chi_tiet_id", "don_hang_id", "san_pham_id", "so_luong", "don_gia"];
    public $timestamps = false;

    public function orders()
    {
        return $this->belongsTo(Orders::class, "don_hang_id");
    }

    public function product()
    {
        return $this->belongsTo(Products::class, "san_pham_id");
    }

    public function total()
    {
        return $this->so_luong * $this->don_gia;
    }
}
