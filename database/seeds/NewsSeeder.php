<?php

use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\News::class,100)->create()->each(function($news){
            $user = App\User::inRandomOrder()->first();
            $news->user_id = $user->id;
            $news->save();
        });
    }
}
