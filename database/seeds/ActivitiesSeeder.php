<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ActivitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Activity::class, 5)->create();
        /*
          DB::table('users')->insert([
              'name' => str_random(10),
              'email' => str_random(10).'@gmail.com',
              'password' => bcrypt('secret'),
          ]);
        */
    }
}
