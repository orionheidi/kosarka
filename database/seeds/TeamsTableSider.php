<?php

use Illuminate\Database\Seeder;

class TeamsTableSider extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Team::class,100)->create()->each(function($team){
            // $user = App\User::inRandomOrder()->first();
            // $post->user_id = $user->id;
            $team->save();
            // $post->update([
            //     'user_id' => $user_id
            // ]);
        });
    }
}
