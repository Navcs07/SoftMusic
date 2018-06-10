<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name' => 'Cat 1',
        ]);

        \App\Models\Category::create([
            'name' => 'Cat 2',
        ]);

        \App\Models\Category::create([
            'name' => 'Cat 3',
        ]);

        \App\Models\Category::create([
            'name' => 'Cat 4',
        ]);

        \App\Models\Category::create([
            'name' => 'Cat 5',
        ]);

        \App\Models\Category::create([
            'name' => 'Cat 6',
        ]);
    }
}
