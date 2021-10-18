<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
}

class Post extends Model
{
    /**
     * Get the livros for the blog post.
     */
    public function editoras()
    {
        return $this->hasMany(livros::class);
    }
}