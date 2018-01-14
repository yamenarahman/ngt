<?php

use App\User;
use Illuminate\Database\Seeder;

class InitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'     => 'Admin',
            'email'    => 'admin@ngtammar.com',
            'password' => bcrypt('admin')
        ]);
    }
}
