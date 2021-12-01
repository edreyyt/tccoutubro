<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Editora extends Model
{
    use HasFactory;
    protected $fillable = [
        'venda',
        'troca',
        'emprestimo',
    ];



public function Editora()
{
    return $this->hasMany(livro::class, 'editora_nome');
}


}
