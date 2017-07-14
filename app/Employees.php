<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    //
    protected $table = "employees";
    protected $fillable = ['email','password','level','dob','gender','phone_number','address','employee_name','avatar'];
    protected $primaryKey ="employee_id";
}
