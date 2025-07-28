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
        $tag1 = Tag::create(['name' => 'PHP (tag1)']);
        $tag2 = Tag::create(['name' => 'Laravel (tag2)']);
        $tag3 = Tag::create(['name' => 'JavaScript (tag3)']);
        $tag4 = Tag::create(['name' => 'TypeScript (tag4)']);
        $tag5 = Tag::create(['name' => 'HTML (tag5)']);
        $tag6 = Tag::create(['name' => 'CSS (tag6)']);
        $tag7 = Tag::create(['name' => 'MySQL (tag7)']);
        $tag8 = Tag::create(['name' => 'React (tag8)']);
        $tag9 = Tag::create(['name' => 'Vue.js (tag9)']);
        $tag10 = Tag::create(['name' => 'Node.js (tag10)']);
    }
}
