<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'name' => 'sound system',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'chair &amp; table',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'tent',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'stage',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'lightning',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'HT',
            'tagged_to' => '1'
        ]);
        DB::table('tags')->insert([
            'name' => 'partition',
            'tagged_to' => '1'
        ]);
    }
}
