<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = App\User::create([
            'name' => 'Rob',
            'email' => 'oh.ya.rob@gmail.com',
            'password' => bcrypt('password'),
            'admin' => 1

        ]);

             App\Profile::create([
                 'user_id' => $user->id,
                 'avatar' => 'uploads/avatars/1520304283phpstorm.png',
                 'about' => 'Instead of tossing delicious oyster sauce with blood oranges, use twelve peaces cream and eleven tablespoons nutmeg saucepan.',
                 'facebook' => 'facebook.com',
                 'youtube' => 'youtube.com'

        ]);
    }
}


