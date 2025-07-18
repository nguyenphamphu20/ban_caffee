<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BankCard extends Model
{
    protected $table = "the_ngan_hangs";
    protected $primaryKey = "the_id";
    protected $fillable = ["the_id", "khach_hang_id", "ten_ngan_hang", "so_the", "ten_chu_the", "thang", "nam"];
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, "khach_hang_id");
    }
}