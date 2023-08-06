<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLyDatVe extends Model
{
    use HasFactory;
    protected $table = 'quanlydatve';
    protected $primaryKey = 'MaDatVe'; // Đặt tên cột primary key thích hợp ở đây
     protected $fillable = [
         'DiemKhoiHanh','DiemDen','NgayDatVe','NgayKhoiHanh','SoLuongVe'
     ];
}
