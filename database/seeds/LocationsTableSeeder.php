<?php

use Illuminate\Database\Seeder;

class LocationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('locations')->insert([
            'location_name' => 'Jakarta'
        ]);
        DB::table('locations')->insert([
            'location_name' => 'Bandung'
        ]);
        DB::table('locations')->insert([
            'location_name' => 'Surabaya'
        ]);
        DB::table('locations')->insert([
            'location_name' => 'Bali'
        ]);
        DB::table('locations')->insert([
            'location_name' => 'Medan'
        ]);
        DB::table('locations')->insert([
            'location_name' => 'Semarang'
        ]);    
    }
}
