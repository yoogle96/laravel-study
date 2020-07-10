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
        $this->call('UserTableSeeder');
        $this->call('ProjectTableSeeder');
        $this->call('TaskTableSeeder');
        // $this->call(UserSeeder::class);
    }
}
