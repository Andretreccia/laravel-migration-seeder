<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Generator as Faker;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        //
        for ($i = 0; $i < 10; $i++) {
            $post = new Post();
            $post->title = $faker->title();
            $post->body = $faker->text();
            $post->author = $faker->name();
            $post->date_post = $faker->dateTime();
            $post->save();
        }
    }
}