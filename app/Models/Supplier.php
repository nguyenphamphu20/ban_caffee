<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = "nha_cung_caps";
    protected $primaryKey = "cung_cap_id";
    protected $fillable = ["cung_cap_id", "ten_cung_cap", "nguoi_lien_he", "email", "sdt", "dia_chi"];
    public $timestamps = false;


    public function products()
    {
        return $this->hasMany(Product::class, "cung_cap_id");
    }
}
