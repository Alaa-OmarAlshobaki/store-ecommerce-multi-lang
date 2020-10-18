<?php

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      Setting::setMany([
          'default_locale'=>'ar',
          'default_timezone'=>true,
          'reviews_enabled'=>true,
          'auto_approve_reviews'=>true,
          'supported_currencc'
          'default_currency'=>"USD",
          'store_email'=>'admin@gmail.com',
          
          
      ]);
    }
}