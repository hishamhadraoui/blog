<?php

use Illuminate\Database\Seeder;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Post::class, 50)->create()->each(function ($p) {
        	factory(App\Comment::class, 10)->create(['post_id' => $p->id]);
        });
    }
}
