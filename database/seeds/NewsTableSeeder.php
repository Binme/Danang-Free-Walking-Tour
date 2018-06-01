<?php

use Illuminate\Database\Seeder;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->insert([
        	[
        		'img'=>'news1.jpg',
                'title'=>'STUDENTS OFFER FREE WALKING TOURS TO FOREIGN TOURISTS IN DA NANG',
        		'author'=>'Tuoi Tre News',
        	],
            [
                'img'=>'news2.jpg',
                'title'=>'Free walking tours open to visitors',
                'author'=>'DA NANG Today',
            ],
        ]);
    }
}
