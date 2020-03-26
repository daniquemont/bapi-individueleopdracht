<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(GistingTableSeeder::class);
        $this->call(BierTableSeeder::class);
        $this->call(BiersoortTableSeeder::class);
    }
}
