<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class menus extends Model
{
    use HasFactory;
    protected $fillable = [
        "menu_name",
        "parent_id",
        "level",
        "menu_order",
        "link",
        "icon",
        "status",
    ];
    protected $primaryKey = "menu_id";
    protected $table = "menus";
    public $timestamps = false;
}
