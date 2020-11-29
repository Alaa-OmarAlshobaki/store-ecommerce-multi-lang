<?php

use App\Models\Admin;
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
        Admin::create([
            'name' => 'alaa omar',
            'email' => 'a@alaaoomar92.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}
