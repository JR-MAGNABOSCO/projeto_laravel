<?php

namespace Database\Seeders;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Database\Seeder;

class NoticiaSeeder extends Seeder
{
    public function run(): void
    {
        Categoria::factory()->count(5)->create();
        Noticia::factory()->count(10)->create();
    }
}
