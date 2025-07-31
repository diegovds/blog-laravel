<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::create(['name' => 'Inteligência Artificial']);
        Tag::create(['name' => 'Cinema Independente']);
        Tag::create(['name' => 'Rock Alternativo']);
        Tag::create(['name' => 'Lançamentos Tecnológicos']);
        Tag::create(['name' => 'Notícias Internacionais']);
        Tag::create(['name' => 'Streaming de Música']);
        Tag::create(['name' => 'Análises de Filmes']);
        Tag::create(['name' => 'Cultura Pop']);
        Tag::create(['name' => 'Dispositivos Inteligentes']);
        Tag::create(['name' => 'Notícias de Última Hora']);
        Tag::create(['name' => 'Diretores de Cinema']);
        Tag::create(['name' => 'Inovações em Software']);
        Tag::create(['name' => 'Festivais de Música']);
        Tag::create(['name' => 'Séries de TV']);
        Tag::create(['name' => 'Gadgets do Momento']);
        Tag::create(['name' => 'Premiações do Cinema']);
        Tag::create(['name' => 'Intérpretes da Nova Geração']);
        Tag::create(['name' => 'Tecnologia 5G']);
        Tag::create(['name' => 'Cobertura Jornalística']);
        Tag::create(['name' => 'Trilhas Sonoras']);

    }
}
