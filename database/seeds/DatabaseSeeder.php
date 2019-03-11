<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(TeamsTableSider::class);
        // $this->call(PlayersTableSider::class);
        //$this->call(CommentsTableSeeder::class);
        // $this->call(NewsSeeder::class);
        $this->call(TeamNewsTableSeeder::class);
    }
}
