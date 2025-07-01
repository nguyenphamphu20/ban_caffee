<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staffs extends Model
{
    protected $table = "nhan_viens";
    protected $fillable = ["nhan_vien_id", "ten_nhan_vien", "vai_tro", "email", "sdt"];
    public $timestamps = false;
}
