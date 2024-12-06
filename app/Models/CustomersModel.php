<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomersModel extends Model
{
    protected $table = "customers";
    protected $fillable = [
        "cus_id","cus_name","gender","telegram","dob"];
}
