<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class admins extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_name",
        "password",
        "full_name",
        "email",
        "avatar"
    ];
    protected $primaryKey = "admin_id";
    protected $table = "admins";
    public $timestamps = false;
}
