<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Super Admin',
            'password' => bcrypt('asdf1234'),
            'email' => 'company@example.com',
            'is_admin' => 1
        ]);
    }
}
