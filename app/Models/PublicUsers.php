<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PublicUsers extends Model
{
    use HasFactory;
    protected $table = "publics";
    protected $fillable = ["name", "email", "password"];
}
