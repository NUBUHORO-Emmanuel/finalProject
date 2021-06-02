<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ill extends Model
{
    use HasFactory;
    protected $fillable = [
      'n_d','Fname','Lname','birthday','illns'
    ];
}
