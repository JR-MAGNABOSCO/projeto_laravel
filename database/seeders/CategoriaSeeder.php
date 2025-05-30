<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    public function run(): void
    {
        $categorias = ['Tecnologia', 'Esportes', 'Saúde', 'Entretenimento', 'Educação'];

        foreach ($categorias as $nome) {
            Categoria::create(['nome' => $nome]);
        }
    }
}
