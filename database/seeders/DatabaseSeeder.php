<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeeder::class);
        $this->call(ArticleSeeder::class);
        $this->call(QuestionSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(TagSeeder::class);
        $this->call(CommentSeeder::class);
        $this->call(BookmarkSeeder::class);
        $this->call(LikeSeeder::class);
    }
}
