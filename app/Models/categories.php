<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    use HasFactory;
    protected $table = "table_categories";
    protected $fillable = [
        'cat_name',
        'ordered_by'
    ];
}
