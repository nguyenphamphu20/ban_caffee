<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = "chi_tiet_don_hangs";
    protected $primaryKey = "chi_tiet_id";
    protected $fillable = ["chi_tiet_id", "don_hang_id", "san_pham_id", "so_luong"];
    public $timestamps = false;

    public function orders()
    {
        return $this->belongsTo(Order::class, "don_hang_id");
    }

    public function product()
    {
        return $this->belongsTo(Product::class, "san_pham_id");
    }

    public function total()
    {
        return $this->so_luong * $this->don_gia;
    }
}
