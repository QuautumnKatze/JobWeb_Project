<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class post_categories extends Model
{
    use HasFactory;
    protected $fillable = [
        "post_category_name",
        "description",
        "status",
    ];
    protected $primaryKey = "post_category_id";
    protected $table = "post_categories";
    public $timestamps = false;
}
