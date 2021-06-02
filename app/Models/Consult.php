<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consult extends Model
{
    use HasFactory;
    protected $fillable = [
        'p_id','Fname','Lname','birthday','illns','medecine', 'doc_id'
    ];
}
