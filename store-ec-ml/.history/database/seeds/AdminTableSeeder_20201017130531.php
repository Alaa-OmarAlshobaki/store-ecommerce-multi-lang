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
            'name' => 'alaa',
            'email' => 'alaa@alaaomar92.com',
            'password'=>bcrypt('123456'),
        ]);
    }
}
