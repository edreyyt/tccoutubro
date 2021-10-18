<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;
}
class Phone extends Model
{
    public function livros()
    {
        return $this->belongsTo(users::class);
    }
}

class Phone extends Model
{
    public function livros()
    {
        return $this->belongsTo(editora::class);
    }
}

class Phone extends Model
{
    public function livros()
    {
        return $this->belongsTo(autors::class);
    }
}

