<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'nome',
        'desc',
        'caract',
        'isbm',
        'edicao',
        'categoria',
        'idioma',
        'autor_nome',
        'editora_nome',
    ];

        public function livros()
    {
        return $this->belongsTo(user::class, 'user_id');
        return $this->belongsTo(autor::class, 'autor_nome');
        return $this->belongsTo(editora::class, 'editora_nome');
    }

}

