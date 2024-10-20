<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class recruiters extends Model
{
    use HasFactory;
    protected $fillable = [
        "email",
        "password",
        "full_name",
        "phone",
        "comparny_name",
        "city_id",
        "district_id",
        "location",
        "introduction",
        "avatar",
        "employee_count",
        "website",
        "status",
        "is_verified",
    ];
    protected $primaryKey = "recruiter_id";
    protected $table = "recruiters";
    public $timestamps = false;
}
