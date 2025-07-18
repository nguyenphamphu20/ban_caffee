<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "san_phams";
    protected $primaryKey = "san_pham_id";
    protected $fillable = ["san_pham_id", "ten_san_pham", "danh_muc_id", "cung_cap_id", "mo_ta", "do_rang", "huong_vi", "gia", "hinh", "trang_thai"];
    public $timestamps = false;

    public function ordersDetails()
    {
        return $this->hasMany(OrderDetail::class, "san_pham_id");
    }

    public function inventory()
    {
        return $this->hasOne(Inventory::class, "ton_kho_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class, "danh_muc_id");
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class, "cung_cap_id");
    }
}
