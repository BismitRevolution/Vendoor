<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserTableSeeder::class);
        $this->call(AdminTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(LocationsTableSeeder::class);
        $this->call(VendorTableSeeder::class);
        $this->call(TagsTableSeeder::class);
        $this->call(MediaTableSeeder::class);
    }
}
