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
        $tag1 = Tag::create(['name' => 'Notebook']);
        $tag2 = Tag::create(['name' => 'MacBook']);
        $tag3 = Tag::create(['name' => 'Tablet']);
        $tag4 = Tag::create(['name' => 'Monitor']);
        $tag5 = Tag::create(['name' => 'Teclado']);
        $tag6 = Tag::create(['name' => 'SSD']);
        $tag7 = Tag::create(['name' => 'Raspberry Pi']);
        $tag8 = Tag::create(['name' => 'Desenvolvimento Web']);
        $tag9 = Tag::create(['name' => 'Frontend']);
        $tag10 = Tag::create(['name' => 'Produtividade']);
    }
}
