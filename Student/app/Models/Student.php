<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Student extends Model
{
    protected $fillable = [
        "Nama",
        "NIM",
        "Email",
        "Jurusan"
    ];
}