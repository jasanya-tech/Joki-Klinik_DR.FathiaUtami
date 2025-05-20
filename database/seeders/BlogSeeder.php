<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $category =
        [
            [
                'id' => 1,
                'name' => 'Kesehatan',
                'status_id' => 1,
            ],
            [
                'id' => 2,
                'name' => 'Hidup Sehat',
                'status_id' => 1,
            ],
            [
                'id' => 3,
                'name' => 'Olahraga',
                'status_id' => 1,
            ],
        ];
        Category::insert($category);

        $blog =
        [
            [
                'id' => 1,
                'thumbnail' => 'deafult.png',
                'title' => 'Kesehatan Mental',
                'slug' => 'kesehatan-mental',
                'author' => 'DR. Brando S.Gpt',
                'body' => 'Kesehatan mental adalah keadaan di mana seseorang dapat mengelola stres, berfungsi secara produktif, dan berkontribusi pada komunitasnya.',
                'status_id' => 1,
            ],
        ];
        Blog::insert($blog);

        $blogCategory =
            [
                'blog_id' => 1,
                'category_id' => 1,
            ];
        BlogCategory::insert($blogCategory);
    }
}
