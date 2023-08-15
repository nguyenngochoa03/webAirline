<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class books extends Model
{
    use HasFactory;
     protected $table = 'books';
     protected $fillable = [
         'title','author','price','description','image'
     ];
}
