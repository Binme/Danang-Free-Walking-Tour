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
        $this->call(NewsTableSeeder::class);
        $this->call(New_detailsTableSeeder::class);
        $this->call(RecomsTableSeeder::class);
        $this->call(Recom_detailsTableSeeder::class);
    }
}