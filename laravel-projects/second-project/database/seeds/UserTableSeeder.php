<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'fsasaf',
            'email' => 'asasfasdf@bar.com',
            'password' => '12345'
        ]);
    }
}
