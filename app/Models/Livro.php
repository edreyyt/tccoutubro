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
        'descr',
        'caract',
        'edicao',
        'categoria',
        'status',
        'idioma',
        'autor_nome',
        'editora_nome',
        'image',
        'User_id',
    ];

    //     public function livros()
    // {
    //     return $this->belongsTo(user::class, 'user_id');
    //     return $this->belongsTo(autor::class, 'autor_nome');
    //     return $this->belongsTo(editora::class, 'editora_nome');
    // }

    public function proprietario(){
        return $this->belongsTo(User::class, 'User_id');
    }

}

