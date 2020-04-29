<?php

use App\Setting;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    Setting::create([
        'blog_name'=>'anis cherni',
         'phone_number'=>'002163355685',
          'blog_email'=>'anischerni@gmail.com',
          'adress'=>'tunis'
       ]);
    }
}
