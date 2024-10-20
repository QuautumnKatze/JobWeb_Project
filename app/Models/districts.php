<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class districts extends Model
{
    use HasFactory;
    protected $fillable = [
        "district_name"
    ];
    protected $primaryKey = "district_id";
    protected $table = "districts";
    public $timestamps = false;
}
