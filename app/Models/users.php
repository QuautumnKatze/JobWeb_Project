<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $fillable = [
        "email",
        "password",
        "full_name",
        "gender",
        "phone",
        "avatar",
        "status"
    ];
    protected $primaryKey = "user_id";
    protected $table = "users";
    public $timestamps = false;

}
