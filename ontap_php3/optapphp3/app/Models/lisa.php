<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lisa extends Model
{
    use HasFactory;
    protected $table = "lisa";
    protected $fillable = [
        'title','author','price','description','image','email','phone'
    ];
}
