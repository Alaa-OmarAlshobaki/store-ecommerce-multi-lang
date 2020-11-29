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
        // $this->call(UserSeeder::class);
       
         $this->call(SettingTableSeeder::class);
         $this->call(AdminTableSeeder::class);
         $this->call(CategoryDatabaseSeeder ::class);
         $this->call(SubcatTableSeeder ::class);
         $this->call(brandTableSeeder ::class);
         $this->call(TagsTableSeeder ::class);
         $this->call(ProductTableSeeder ::class);
    }
}