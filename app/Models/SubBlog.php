<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubBlog extends Model
{
    use HasFactory;

    protected $fillable = [
        'blog_id',
        'title',
        'paragraph',
        'image',
    ];


    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

}
