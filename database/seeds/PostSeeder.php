<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 10)->create();

        // factory(App\Post::class, 10)->create()->each(function ($post) {
        //     $post->comments()->save(factory(App\Comment::class)->make());
        // });
    }
}
