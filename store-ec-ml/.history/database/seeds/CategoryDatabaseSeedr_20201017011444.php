<?php
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategoryDatabaseSeedr extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       factory(category::class,30)->create()
    }
}
