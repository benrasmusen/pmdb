<?php

use Illuminate\Database\Seeder;

class BandsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Band::class, 15)->create();
	   //  factory(App\Band::class, 15)->create()->each(function ($u) {
				// $u->save(factory(App\Band::class)->make());
	   //  });
    }
}
