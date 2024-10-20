<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jobs extends Model
{
    use HasFactory;
    protected $fillable = [
        "job_category_id",
        "job_name",
        "salary",
        "city_id",
        "requirement",
        "content",
        "recruiter_id",
        "status"
    ];
    protected $primaryKey = "job_id";
    protected $table = "jobs";
    public $timestamps = false;

}
