<?php

use App\Avatar;
use App\User;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class AvatarSeeder extends Seeder {
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker) {

        $users = User::all();

        foreach ($users as $user) {
            $newAvatar = new Avatar;

            $newAvatar->user_id = $user->id;
            $newAvatar->phone = $faker->phoneNumber;
            $newAvatar->avatar = $faker->imageUrl(640, 480);

            $newAvatar->save();

        }
    }
}
