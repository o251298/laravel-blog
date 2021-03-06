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
        // $this->call(UserSeeder::class);
        // $this->call(UserSeeder::class);
        // $this->call(PhoneSeeder::class);
        $this->call(PhotoSeeder::class);
        $this->call(VideoSeeder::class);
    }
}
