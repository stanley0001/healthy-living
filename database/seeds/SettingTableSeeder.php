<?php

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
        $data=array(
            'description'=>"Sample description",
            'short_des'=>"Short description",
            'photo'=>"image.jpg",
            'logo'=>'logo.jpg',
            'address'=>"342 -Nairobi",
            'email'=>"JOWATECH@gmail.com",
            'phone'=>"+254 (700) 001-002",
        );
        DB::table('settings')->insert($data);
    }
}
