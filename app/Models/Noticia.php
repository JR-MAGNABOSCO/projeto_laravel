<?php

namespace App\Models;

use App\Models\Categoria;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Noticia extends Model
{
    use HasFactory;
    
    protected $fillable = ['titulo', 'conteudo', 'imagem'];

    public function categoria()
{
    return $this->belongsTo(Categoria::class);
}

}
