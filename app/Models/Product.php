<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "san_phams";
    protected $primaryKey = "san_pham_id";
    protected $fillable = ["san_pham_id", "ten_san_pham", "mo_ta", "danh_muc_id", "do_rang", "nguon_goc", "huong_vi", "gia", "hinh", "trang_thai"];
    public $timestamps = false;

    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class, "san_pham_id");
    }

    public function inventory()
    {
        return $this->hasMany(Inventory::class, "ton_kho_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, "danh_muc_id");
    }
}
