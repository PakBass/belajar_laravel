<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'image'     => 'gambar1.jpg',
            'title'     => 'Post 1',
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto ex illum similique, quae, nulla, nemo quibusdam rem accusamus veniam ratione! Consectetur voluptatum dolorem blanditiis maiores odio delectus incidunt, velit excepturi quisquam porro fuga harum autem. Eius inventore dolor, rerum sint magni quaerat praesentium! Debitis veritatis impedit tempore aliquam amet.'
        ]);
        Post::create([
            'image'     => 'gambar2.jpg',
            'title'     => 'Post 2',
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto ex illum similique, quae, nulla, nemo quibusdam rem accusamus veniam ratione! Consectetur voluptatum dolorem blanditiis maiores odio delectus incidunt, velit excepturi quisquam porro fuga harum autem. Eius inventore dolor, rerum sint magni quaerat praesentium! Debitis veritatis impedit tempore aliquam amet.'
        ]);
        Post::create([
            'image'     => 'gambar3.jpg',
            'title'     => 'Post 3',
            'content'   => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta iusto ex illum similique, quae, nulla, nemo quibusdam rem accusamus veniam ratione! Consectetur voluptatum dolorem blanditiis maiores odio delectus incidunt, velit excepturi quisquam porro fuga harum autem. Eius inventore dolor, rerum sint magni quaerat praesentium! Debitis veritatis impedit tempore aliquam amet.'
        ]);
    }
}

