<?php

use App\Post;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        /* prendo tutti gli user */
        $users = User::all();

        for ($i = 0; $i < 20; $i++) {
            $newPost = new Post;
            $newPost->title = $faker->text(80);
            $newPost->body = $faker->text(500);
            $newPost->user_id = $users->random()->id;

            $newPost->save();
        }
    }
}
