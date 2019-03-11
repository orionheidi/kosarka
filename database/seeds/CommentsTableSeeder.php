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
        factory(App\Comment::class,100)->create()->each(function($comment){
            $team = App\Team::inRandomOrder()->first();
            $user = App\User::inRandomOrder()->first();
            $comment->team_id = $team->id;
            $comment->user_id = $user->id;
            $comment->save();
        });
    }
}
