<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    protected $table = "ton_khos";
    protected $primaryKey = "ton_kho_id";
    protected $fillable = ["ton_kho_id", "san_pham_id", "so_luong_con_lai"];
    public $timestamps = false;

    public function products()
    {
        return $this->belongsTo(OrderDetail::class, "san_pham_id");
    }
}
