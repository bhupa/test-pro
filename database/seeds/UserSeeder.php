<?php

use App\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $data =[
            'name'=>'Test User',
            'email'=>'test@gmail.com',
            'password'=>bcrypt('12345678')
        ];

        User::create($data);
    }
}
