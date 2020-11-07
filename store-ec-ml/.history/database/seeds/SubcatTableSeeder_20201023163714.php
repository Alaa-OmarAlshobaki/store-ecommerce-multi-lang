<?php

use App\Models\Category;
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
        factory(category::class,)->create(
            [
                'parent_id'=>$this->getRandomParentId(),
            ]
        );
    }
    private function getRandomParentId(){
        return \App\Models\Category::inRandomOrder()->first();
    }
}
