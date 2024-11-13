<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    use HasFactory;

    protected $table = "beritas";

    protected $fillable = ['id', 'title', 'author', 'description', 'content', 'url', 'url_image', 'published_at', 'category', 'timestamp'];
}

