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
          'supported_currencies'=>['USD','LE','SAR'],
          'default_currency'=>"USD",
          'store_email'=>'admin@gmail.com',
          'search_engine'=>'mysql',
          'local_shipping_cost'=> 0,
          'outer_shipping_cost'=> 0,
          'outer_shipping_cost'=> 0,
          
          
          
      ]);
    }
}