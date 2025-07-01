<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventories extends Model
{
    protected $table = "ton_khos";
    protected $fillable = ["ton_kho_id", "san_pham_id", "so_luong_con_lai"];
    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(OrdersDetails::class, "san_pham_id");
    }
}
