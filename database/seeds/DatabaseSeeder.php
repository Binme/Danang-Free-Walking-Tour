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
        $this->call(RecomsTableSeeder::class);
        $this->call(Recom_detailsTableSeeder::class);
        $this->call(PostsTableSeeder::class);
        $this->call(ImagesTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(MenusTableSeeder::class);
        $this->call(Menu_detailsTableSeeder::class);
    }
}
