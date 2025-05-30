<?php

namespace Database\Factories;

use App\Models\Noticia;
use App\Models\Categoria;
use Illuminate\Database\Eloquent\Factories\Factory;


class NoticiaFactory extends Factory
{
    protected $model = Noticia::class;
    
    public function definition(): array
    {
        return [
            'titulo' => $this->faker->sentence,
            'conteudo' => $this->faker->paragraphs(20, true),
            'imagem' => 'https://picsum.photos/seed/' . $this->faker->uuid . '/800/400',
            'categoria_id' => Categoria::inRandomOrder()->first()->id,
        ];
    }
}
