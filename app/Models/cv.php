<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cv extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "link"
    ];
    protected $primaryKey = "cv_id";
    protected $table = "cv";
    public $timestamps = false;
}
