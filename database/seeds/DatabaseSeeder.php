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
         $this->call(UsersTableSeeder::class);
        
    }
}

// class UserSeeder extends Seeder
// {
// 	public function run()
//     {
//     	DB::table('users')->insert([
//         	['name'=>'PHP','email'=>str_random(3).'gmail.com','idGroup'=>'1','password'=>bcrypt('123456')],
// 			['name'=>'Laravel','email'=>str_random(3).'@gmail.com','idGroup'=>'0','password'=>bcrypt('123456')],
// 			['name'=>'ASP.net','email'=>str_random(3).'@gmail.com','idGroup'=>'0','password'=>bcrypt('123456')]
//         ]);
//     }
// }


