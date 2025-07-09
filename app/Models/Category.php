<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "danh_mucs";
    protected $primaryKey = "danh_muc_id";
    protected $fillable = ["danh_muc_id", "ten_danh_muc", "gia", "mo_ta"];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Product::class, "danh_muc_id");
    }
}
