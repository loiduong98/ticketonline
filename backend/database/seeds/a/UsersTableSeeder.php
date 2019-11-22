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
        //
        for($i = 1; $i <= 10;$i++)
        {
        	DB::table('Users')->insert(
	        	[
	        		'Ten' => 'User_'.$i,
	            	'Email' => 'user_'.$i.'@gmail.com',	            	
	            	'idGroup'=> 0,
                    'Password' => bcrypt('123456'),
	            	'created_at' => new DateTime(),
	        	]
        	);
        }
    }
}
