<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    use HasFactory;
}
class Post extends Model
{
    /**
     * Get the livros for the blog post.
     */
    public function autors()
    {
        return $this->hasMany(livros::class);
    }
}