<?php

use Illuminate\Database\Seeder;
use App\Post;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $min = 1;
        $max = 5;
        foreach(Post::all() as $post)
        {
            factory(App\Comment::class, rand($min, $max))->create();
        }
    }
}
