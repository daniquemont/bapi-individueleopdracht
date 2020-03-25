<?php

use Illuminate\Database\Seeder;

class GistingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('gisting')->insert([
            'gisting' => 'Hoge gisting',
        ]);

        DB::table('gisting')->insert([
            'gisting' => 'Lage gisting',
        ]);

        DB::table('gisting')->insert([
            'gisting' => 'Gemixte gisting',
        ]);
    }
}
