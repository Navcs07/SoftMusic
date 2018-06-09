<?php

use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Spatie\Permission\Models\Role::create([
            'name' => 'Admin'
        ]);

        \Spatie\Permission\Models\Role::create([
            'name' => 'User'
        ]);
    }
}
