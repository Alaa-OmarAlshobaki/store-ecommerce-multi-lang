<?php

use Illuminate\Database\Seeder;

class brandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(category::class,30)->create();
    }
}
