<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = "danh_mucs";
    protected $fillable = ["danh_muc_id", "ten_danh_muc", "gia", "mo_ta"];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(OrdersDetails::class, "san_pham_id");
    }
}
