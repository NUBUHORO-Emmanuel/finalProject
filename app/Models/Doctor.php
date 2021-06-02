<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
       'doc_code','n_id','FirstName','LastName','Gender','DateOfBirth','PhoneNumber','Fax','Email','Passcode','country','city'
   ];
}
