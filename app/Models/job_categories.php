<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class job_categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "job_category_name",
        "description",
        "status"
    ];
    protected $primaryKey = "job_category_id";
    protected $table = "job_category";
    public $timestamps = false;
}
