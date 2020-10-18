<?php

use Illuminate\Database\Seeder;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ::create([
            'name' => 'A New Hope',
            'year' => '1977'
        ]);
    }
}
