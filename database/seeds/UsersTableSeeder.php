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
        DB::table('users')->insert([
        	[
        		'name' => 'giabao',
        		'email' => 'giabao2014dn@gmail.com',
        		'password' => bcrypt('12345678'),
                'role' => '1',
        	],
            [
                'name' => 'duybau',
                'email' => 'duybau@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '1',
            ],
            [
                'name' => 'vanloi',
                'email' => 'vanloi@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '2',
            ],
            [
                'name' => 'thuykieu',
                'email' => 'thuykieu@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '1',
            ],
            [
                'name' => 'amazone',
                'email' => 'amazone@gmail.com',
                'password' => bcrypt('12345678'),
                'role' => '0',
            ]
        ]);
    }
}
