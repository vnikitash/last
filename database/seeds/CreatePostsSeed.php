<?php

use Illuminate\Database\Seeder;

class CreatePostsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usersIds = \App\User::query()->where('id', '>', 1)->pluck('id');

        $posts = [];

        foreach ($usersIds as $userId) {
            $posts[] = [
                'user_id' => $userId,
                'text' => "Title " . rand(1,100)
            ];
        }

        \App\Post::insert($posts);
    }
}
