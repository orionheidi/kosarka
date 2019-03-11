<?php

use Illuminate\Database\Seeder;

class TeamNewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\TeamNews::class, 15)->create();
    }
}
