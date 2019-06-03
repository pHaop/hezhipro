<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i <40 ; $i++) { 
        
        
        DB::table('user')->insert([
        	'username' => str_random(10),
            'password' => 123456,
            'phone' => '133'.str_random(8),
            'email'=> str_random(4).'qq.com',
            'person' => '/uploads/img_82471558443726.jpg',
            'status' => 0,
            'addtime' => date('Y-m-d H:i:s',time())]);
        }
    }
}
