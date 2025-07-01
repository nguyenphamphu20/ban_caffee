<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = "san_phams";
    protected $fillable = ["san_pham_id", "ten_san_pham", "mo_ta", "danh_muc_id", "do_rang", "nguon_goc", "huong_vi", "hinh", "trang_thai"];
    public $timestamps = false;

    public function ordersDetails()
    {
        return $this->hasMany(OrdersDetails::class, "san_pham_id");
    }

    public function inventory()
    {
        return $this->hasMany(Inventories::class, "ton_kho_id");
    }

    public function category()
    {
        return $this->belongsTo(Categories::class, "danh_muc_id");
    }
}
