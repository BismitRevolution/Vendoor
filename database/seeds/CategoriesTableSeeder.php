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
        DB::table('categories')->insert([
            'name' => 'equipment'
        ]);
        DB::table('categories')->insert([
            'name' => 'catering'
        ]);
        DB::table('categories')->insert([
            'name' => 'place'
        ]);
        DB::table('categories')->insert([
            'name' => 'printing'
        ]);
        DB::table('categories')->insert([
            'name' => 'merchandise'
        ]);
        DB::table('categories')->insert([
            'name' => 'transportation'
        ]);
    }
}
