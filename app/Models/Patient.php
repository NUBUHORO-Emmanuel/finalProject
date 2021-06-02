<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $fillable = [
   'gender','FirstName','LastName','N_id','birthday','sex','country','city','tel','Email','pass','Fname','Mname','na_id','Telephone','relationship','birthplace'
];
}
