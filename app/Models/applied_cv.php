<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class applied_cv extends Model
{
    use HasFactory;
    protected $fillable = [
        "cv_id",
        "job_id",
        "status",
    ];
    protected $primaryKey = "applied_cv_id";
    protected $table = "applied_cv";
    public $timestamps = false;
}
