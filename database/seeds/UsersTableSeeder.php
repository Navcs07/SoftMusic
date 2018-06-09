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
        $user = \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => 123456
        ]);

        $user->roles()->attach(1); // admin
    }
}
