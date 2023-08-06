<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuanLyDichVu extends Model
{
    use HasFactory;
    protected $table = 'quanlydichvu';
    protected $primaryKey = 'MaDichVu'; // Đặt tên cột primary key thích hợp ở đây
}
