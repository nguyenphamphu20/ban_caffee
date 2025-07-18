<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


class Staff extends Authenticatable
{
    protected $table = "nhan_viens";
    protected $primaryKey = "nhan_vien_id";
    protected $fillable = ["nhan_vien_id", "ten_nhan_vien", "vai_tro", "email", "password", "remember_token", "sdt", "hinh"];
}