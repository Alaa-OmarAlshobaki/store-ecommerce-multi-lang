<?php

use category;
use Illuminate\Database\Seeder;

class SubcatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(category::class,30)->create(
            [

            ]
        );
    }
    private function getRandomParentId(){
        return 
    }
}
