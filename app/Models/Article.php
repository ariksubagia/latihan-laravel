<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'article';

    use HasFactory;

    protected $fillable = ['title', 'content', 'image'];
    protected $guarded = ['id'];
}
