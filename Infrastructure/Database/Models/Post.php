<?php

namespace App\Infrastructure\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'title',
    ];
}