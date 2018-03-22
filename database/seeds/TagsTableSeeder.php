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
            'tag_name' => 'sound system',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'chair &amp; table',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'tent',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'stage',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'lightning',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'HT',
            'vendor_id' => '1'
        ]);
        DB::table('tags')->insert([
            'tag_name' => 'partition',
            'vendor_id' => '1'
        ]);
    }
}
