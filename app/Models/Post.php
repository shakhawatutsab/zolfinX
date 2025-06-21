<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'category',
        'slug',
        'thumbnail',
        'content',
        'excerpt',
        'user_id',
        'views',
        'user_id',
    ];

}
