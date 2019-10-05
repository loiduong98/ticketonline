<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10;$i++)
        {
        	DB::table('users')->insert(
	        	[
	        		'username' => 'User_'.$i,
                    'password' => bcrypt('123456'),	            	
                    'idGroup'=> 0,
                    'gioitinh'=> 0,
                    'urlHinh'=> 0,
                    'remember_token'=> '',           
	            	'created_at' => new DateTime()
	        	]
        	);
        }
    }
}
