<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cities extends Model
{
    use HasFactory;
    protected $fillable = [
        "city_name"
    ];
    protected $primaryKey = "city_id";
    protected $table = "cities";
    public $timestamps = false;
}
