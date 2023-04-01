<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'active',
        'code',
        'title',
        'paragraph',
        'image',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function subBlogs()
    {
        return $this->hasMany(SubBlog::class);
    }

}
