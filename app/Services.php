<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    //
    protected $table = "services";
    protected $fillable = ['service_name','detail','service_icon'];
    protected $primaryKey ="service_id";
}
