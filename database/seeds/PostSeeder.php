<?php

use App\Models\Post;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PostSeeder extends Seeder
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
            $_post = new Post();
            $_post->title = $faker->unique()->word;
            $_post->body = $faker->text($maxNbChars = 200);
            $_post->author = $faker->name();
            $_post->date_post = $faker->dateTime();
            $_post->save();
        }
    }
}